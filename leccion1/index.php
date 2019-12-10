  
<?php
    
    //clase es el concepto generico
    class Person
    {
        public $firstName;
        public $lastName;

        // constructor +, un metodo especial o magico
        public function __construct($firstName, $lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
        // funcion o metodo
        public function fullName()
        {
            // para poder acceder a una propiedad de una clase desde un metodo se usa this
            return $this->firstName . ' ' . $this->lastName;
        }
    }
    // instancia de una clase
    $person1 = new Person('Cituk', 'Caamal');
    $person2 = new Person('Persona', 'Xituk');
    //
    echo "{$person1->fullName()} es amigo de {$person2->fullName()}";