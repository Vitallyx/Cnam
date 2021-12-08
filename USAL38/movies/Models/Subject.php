<?php

class Subject
{
    /** @var int $subject_id The subject identifier */
    private int $subject_id;

    /** @var int $subject_id The subject name0 */
    private string $subject_name;


    /**
     * Constructeur de l'objet
     * (initialiser les attrivuts de l'objet)
     */
    public function __construct()
    {
        $this->subject_id = 0;
        $this->subject = 'Unknown Category';
        echo 'Je suis dans le constructeur de Subject';
    }

    /**
     * Get the subject identifier
     * @return int The subject identifier
     */
    public function getSubjectId(): int
    {
        return $this->subject_id;
    }

    /**
     * Get the subject name
     * @return string The subject name
     */
    public function getSubjectName(): string
    {
        return $this->subject_name;
    }

    /**
     * Get the new subject name
     * @param string $name The new subject name
     */
    public function setSubjectName(string $name): void
    {
        $this->subject_name = $name;
    }
}
