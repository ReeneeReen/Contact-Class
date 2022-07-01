<?php

interface ContactBuild
{
    public function setName($value): ContactBuild;
    public function setSurname($value): ContactBuild;
    public function setEmail($value): ContactBuild;
    public function setPhone($value): ContactBuild;
    public function setAddress($value): ContactBuild;
    public function build(): Contact;

}

class Contact implements ContactBuild
{
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;
    private $contact;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->contact = $this;
    }

    public function setName($value): ContactBuild
    {
        $this->contact->name = $value;
        return $this;
    }

    public function setSurname($value): ContactBuild
    {
        $this->contact->surname = $value;
        return $this;
    }

    public function setEmail($value): ContactBuild
    {
        $this->contact->email = $value;
        return $this;
    }

    public function setPhone($value): ContactBuild
    {
        $this->contact->phone = $value;
        return $this;
    }

    public function setAddress($value): ContactBuild
    {
        $this->contact->address = $value;
        return $this;
    }

    public function build(): Contact
    {
        return $this->contact;
    }
}


$contact = new Contact();
$newContact = $contact->setPhone('000-555-000')
    ->setName("John")
    ->setSurname("Surname")
    ->setEmail("john@email.com")
    ->setAddress("Some address")
    ->build();



