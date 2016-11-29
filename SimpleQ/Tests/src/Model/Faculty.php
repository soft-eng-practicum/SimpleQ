<?php
namespace DatabaseTesting\Model;

class Faculty
{
    protected $facID; //int
    protected $userName; //String
    protected $passWord; //String
    protected $email; //String
    protected $firstName; //String
    protected $lastName; //String

    /*
     * @return int
     */
    public function getId()
    {
        return $this -> facID;
    }

    /*
     * @param string $facID
     */
    public function setId($facID)
    {
        $this -> facID = $facID;
    }

    /*
     * @return string
     */
    public function getUsername()
    {
        return $this -> userName;
    }

    /*
     * @return string $userName
     */
    public function setUsername($userName)
    {
        $this -> userName = $userName;
    }

    /*
    * @return string
    */
    public function getPassword()
    {
        return $this -> passWord;
    }

    /*
     * @param string $passWord
     */
    public function setPassword($passWord)
    {
        $this -> passWord = $passWord;
    }

    /*
    * @return string
    */
    public function getEmail()
    {
        return $this -> email;
    }

    /*
     * @param string $email
     */
    public function setEmail($email)
    {
        $this -> email = $email;
    }

    /*
    * @return string
    */
    public function getFirstname()
    {
        return $this -> firstName;
    }

    /*
     * @param string $firstName
     */
    public function setFirstname($firstName)
    {
        $this -> firstName = $firstName;
    }

    /*
    * @return string
    */
    public function getLastname()
    {
        return $this -> lastName;
    }

    /*
     * @param string $lastName
     */
    public function setLastname($lastName)
    {
        $this -> lastName = $lastName;
    }

}