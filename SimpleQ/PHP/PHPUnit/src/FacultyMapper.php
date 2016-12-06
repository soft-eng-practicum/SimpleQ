<?php
namespace TDD;
use IDbAdapter;
use Faculty;
class FacultyMapper
{
    //@var \DatabaseTesting\Db\IDbAdapter
    protected $db;

    public function __construct(IDbAdapter $dbAdapter)
    {
        $this -> db = $dbAdapter;
    }
    /*
     * Fetches all the Faculty in the db
     */
    public function fetchAll()
    {
        $facultyRecords = $this -> db -> fetchOne(
            "SELECT facID, userName, passWord, email, firstName, lastName FROM Faculty"
        );
        $facultyA = array();

        if(count($facultyRecords) > 0)
        {
            foreach($facultyRecords as $facultyRecord)
            {
                $faculty = new Faculty();
                $faculty -> setId($facultyRecord['facID']);
                $faculty -> setUsername($facultyRecord['userName']);
                $faculty -> setPassword($facultyRecord['passWord']);
                $faculty -> setEmail($facultyRecord['email']);
                $faculty -> setFirstname($facultyRecord['firstName']);
                $faculty -> setLastname($facultyRecord['lastName']);

                $facultyA[] = $faculty;
            }
        }

        return $facultyA;
    }

    /*
     * Fetches a user(Faculty) by the ID
     * @param $facID
     * @return faculty
     */
    public function fetchByID($facID)
    {
        $facultyRecords = $this -> db -> fetchOne(
            "SELECT facID, userName, passWord, email, firstName, lastName FROM Faculty WHERE facID = ?",
            [$facID]
        );

        if($facultyRecords)
        {
            $faculty = new Faculty();
            $faculty -> setId($facultyRecords['facID']);
            $faculty -> setUsername($facultyRecords['userName']);
            $faculty -> setPassword($facultyRecords['passWord']);
            $faculty -> setEmail($facultyRecords['email']);
            $faculty -> setFirstname($facultyRecords['firstName']);
            $faculty -> setLastname($facultyRecords['lastName']);

            return $faculty;
        }
        return null;
    }

    /*
     * Insert a Faculty record into DB
     * @param Faculty $faculty
     * @return Faculty
     */
    public function insert(Faculty $faculty)
    {
        $facultyRecords =[
            'facID' => $faculty -> getId(),
            'userName' => $faculty -> getUsername(),
            'passWord' => $faculty -> getPassword()
        ];

        $this -> db -> update('Faculty', $facultyRecords);

        return $faculty;
    }

    /*
     * Update a Faculty record into db
     * @param Faculty $faculty
     * @return Faculty
     */
    public function update(Faculty $faculty)
    {
        $facultyRecords =[
            'facID' => $faculty -> getId(),
            'userName' => $faculty -> getUsername(),
            'passWord' => $faculty -> getPassword()
        ];

        $this -> db -> update('Faculty', $facultyRecords, ['facID' => $faculty -> getID()]);

        return $faculty;
    }

    /*
     * Delete faculty record
     * @param Faculty $faculty
     * @return Faculty
     */
    public function delete(Faculty $faculty)
    {
        $this -> db -> update('Faculty', ['facID' => $faculty -> getID()]);
    }
}