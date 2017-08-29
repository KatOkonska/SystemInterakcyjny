<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 25.08.17
 * Time: 14:26
 */

/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:40
 */
/**
 * AdminRpository
 */

namespace Repository;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Silex\Application;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * Class UserRepository.
 *
 * @package Repository
 */
class AdminRepository
{
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * TagRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    /**
     * Loads user by login.
     *
     * @param string $login User login
     * @throws UsernameNotFoundException
     * @throws \Doctrine\DBAL\DBALException
     *
     * @return array Result
     */

    public function showAllUsers(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('User_ID', 'User_login', 'User_password', 'Role_ID')
            ->from('User');

        return $queryBuilder->execute()->fetchAll();
    }

    public function showAllTrainings(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
//        $queryBuilder->select('Sport_time', 'Sport_kcal', 'Sport_distance', 'Sport_name_ID', 'User_ID')
//            ->from('Sport');

        $queryBuilder
            ->select('*')
            ->from('Sport_Name', 'sn')
            ->innerJoin('sn','Sport', 's','sn.Sport_Name_ID = s.Sport_ID');

        return $queryBuilder->execute()->fetchAll();
    }

    public function showAllTrainingDays(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('Training_day_day_number', 'User_ID')
            ->from('Training_day');

        return $queryBuilder->execute()->fetchAll();
    }


    public function findOneUserById($id)
    {
        $queryBuilder = $this->queryUserAll();
        $queryBuilder->where('u.User_ID = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }


    protected function queryUserAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('*')
            ->from('User', 'u');
    }


    public function editUser($id, $form)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_login', '?')
            ->set('Role_ID', '?')
            ->where('User_ID = ?')
            ->setParameter(0, $formData['User_login'])
            ->setParameter(1, $formData['Role_ID'])
            ->setParameter(2, $id);

        return $queryBuilder->execute();
    }

    public function deleteUser($id)
    {
//        $queryBuilder = $this->db->createQueryBuilder();
//        $queryBuilder->delete('User', ['id' => $id]);
        return $this->db->delete('User', ['User_ID' => $id]);
    }



    public function editPassword($id, $form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->update('User')
            ->set('User_password', '?')
            ->where('User_ID = ?')
            ->setParameter(0, $app['security.encoder.bcrypt']->encodePassword($formData['User_password'], ''))
            ->setParameter(1, $id);

        return $queryBuilder->execute();
    }

    public function addSportName($form, Application $app)
    {
        $formData = $form->getData();
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->insert('Sport_Name')
            ->values(
                array(
                    'Sport_Name' => '?',
                )
            )
            ->setParameter(0, $formData['Sport_Name']);

        return $queryBuilder->execute();
    }

    public function showAllSportNames(Application $app)
    {
        $queryBuilder = $this->db->createQueryBuilder();
        $queryBuilder->select('*')
            ->from('Sport_Name');

        return $queryBuilder->execute()->fetchAll();
    }

    public function editSportName()
    {

        //edytuj rolę użytkownika
    }

    public function deleteSportName($id)
    {
        return $this->db->delete('Sport_Name', ['Sport_Name_ID' => $id]);
    }





}
