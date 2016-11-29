<?php
use DatabaseTesting\Model\Faculty;
use DatabaseTesting\Mappers\FacultyMapper;
use DatabaseTesting\Tests\Persistence\DatabaseTestCase;
use DatabaseTesting\Tests\Persistence\ArrayDataSet;

class FacultyMapperTest extends DataBaseTestCase
{
    //Obtains arraydataset for future types of querying
    public function getDataSet()
    {
        return new ArrayDataSet( array(
                'Faculty' => array(
                    array('facID' => 1, 'userName' => 'alvin', 'passWord' => 'pw', 'email' => 'faux@faux.com', 'firstName' => 'alvin', 'lastName' => 'one'),
                    array('facID' => 2, 'userName' => 'palmer', 'passWord' => 'pw123', 'email' => 'faux1@faux.com', 'firstName' => 'palmer', 'lastName' => 'two'),
                    array('facID' => 3, 'userName' => 'gunay', 'passWord' => '$pw2', 'email' => 'faux2@faux.com', 'firstName' => 'gunay', 'lastName' => 'three')
                ),
            )
        );
    }

    public function testFetchAll()
    {
        $facultyMapper = new FacultyMapper($this -> getAdapter());
        $allFaculty = $facultyMapper -> fetchAll();


        $this -> assertCount(3, $allFaculty);

        $faculty = $allFaculty[0];
        $this -> assertEquals(1, $faculty -> getId());
        $this -> assertEquals('alvin', $faculty -> getUsername());
        $this -> assertEquals('pw', $faculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $faculty -> getEmail());
        $this -> assertEquals('alvin', $faculty -> getFirstname());
        $this -> assertEquals('one', $faculty -> getLastname());

        $faculty = $allFaculty[1];
        $this -> assertEquals(2, $faculty -> getId());
        $this -> assertEquals('palmer', $faculty -> getUsername());
        $this -> assertEquals('pw', $faculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $faculty -> getEmail());
        $this -> assertEquals('palmer', $faculty -> getFirstname());
        $this -> assertEquals('two', $faculty -> getLastname());

        $faculty = $allFaculty[2];
        $this -> assertEquals(3, $faculty -> getId());
        $this -> assertEquals('gunay', $faculty -> getUsername());
        $this -> assertEquals('pw', $faculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $faculty -> getEmail());
        $this -> assertEquals('gunay', $faculty -> getFirstname());
        $this -> assertEquals('three', $faculty -> getLastname());
    }

    public function testFetchByfacID()
    {
        $FacultyMapper = new FacultyMapper($this -> getAdapter());

        //Verify request is found, then pass var into param for compare
        $faculty = $FacultyMapper ->fetchByID(1);
        $this -> assertEquals('alvin', $faculty -> getUsername());
        $this -> assertEquals('pw', $faculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $faculty -> getEmail());
        $this -> assertEquals('alvin', $faculty -> getFirstname());
        $this -> assertEquals('one', $faculty -> getLastname());

        //Verify not found request
        $faculty = $FacultyMapper -> fetchByID('999');
        $this -> assertNull($faculty);
    }

    public function testInsert()
    {
        $newFaculty = new Faculty();
        $newFaculty -> setId(4);
        $newFaculty -> setUsername('simple');
        $newFaculty -> setPassword('pw');
        $newFaculty -> setEmail('faux@faux.com');
        $newFaculty -> setFirstname('simple');
        $newFaculty -> setLastname('four');

        $facultyMapper = new FacultyMapper($this -> getAdapter());
        $facultyMapper -> insert($newFaculty);

        //Fetch the faculty inserted using fetchByID
        $fetchedFaculty = $facultyMapper -> fetchByID(4);

        //Verify the Faculty fetched matches the faculty object
        $this -> assertNotNull($fetchedFaculty -> getId());
        $this -> assertEquals('simple', $fetchedFaculty -> getUsername());
        $this -> assertEquals('pw', $fetchedFaculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $fetchedFaculty -> getEmail());
        $this -> assertEquals('simple', $fetchedFaculty -> getFirstname());
    }

    public function testUpdate()
    {
        $facultyMapper = new FacultyMapper($this -> getAdapter());

        $faculty = $facultyMapper -> fetchByID('1');
        $this -> assertEquals('alvin', $faculty -> getUsername());
        $this -> assertEquals('pw', $faculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $faculty -> getEmail());
        $this -> assertEquals('alvin', $faculty -> getFirstname());
        $this -> assertEquals('one', $faculty -> getLastname());

        //update the object with new data
        $faculty -> setUsername('allen');
        $faculty -> setId(5);
        $faculty -> setPassword('shallowhal');

        //persist record back to db
        $facultyMapper -> update($faculty);

        //fetch it back under new facID
        $fetchedFaculty = $facultyMapper -> fetchByID(5);

        //Verify the faculty fetch matches the updated faculty object
        $this -> assertEquals(5, $fetchedFaculty -> getId());
        $this -> assertEquals('allen', $fetchedFaculty -> getUsername());
        $this -> assertEquals('shallowhal', $fetchedFaculty -> getPassword());
        $this -> assertEquals('faux@faux.com', $fetchedFaculty -> getEmail());
        $this -> assertEquals('alvin', $fetchedFaculty -> getFirstname());
        $this -> assertEquals('one', $fetchedFaculty -> getLastname());

    }

    public function testDelete()
    {
        $faculty = new Faculty();
        $faculty -> setId(1);

        //delete a faculty from the database
        $facultyMapper = new FacultyMapper($this -> getAdapter());
        $facultyMapper -> delete($faculty);

        //verify it wont be fetched back
        $fetchedFaculty = $facultyMapper -> fetchByID(1);

        $this->assertNull($fetchedFaculty);


    }
}