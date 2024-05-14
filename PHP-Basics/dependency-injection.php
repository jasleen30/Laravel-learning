class Subjects
{
    private array $subjects = [];

    public function setSubjects(string $subject): self
    {
        array_push($this->subjects, $subject);
        return $this;
    }

    public function toArray(): array
    {
        return $this->subjects;
    }
    
}

class Address
{
    private ?string $address;
    private ?string $city;
    private ?string $state;
    private ?string $country;

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function setState(string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country
        ];
    }
}

class Student
{
    private string $name;
    private Subjects $subjects;
    private ?int $age;
    private Address $address;

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setSubjects(Subjects $subjects): self
    {
        $this->subjects = $subjects;
        return $this;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function setAddress(Address $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'subjects' => $this->subjects->toArray(),
            'address' => $this->address->toArray()
        ];
    }

}


// Subjects 
$subjects = new Subjects();
$subjects->setSubjects('Maths');
$subjects->setSubjects('Hindi');
$subjects->setSubjects('Science');
$subjects->setSubjects('English');

// Address
$address = new Address();
$address->setAddress('Deepnagar');
$address->setCity('Dehradun');
$address->setState('UK');
$address->setCountry('India');

$student = new Student();
$student->setName("Jasleen");
$student->setSubjects($subjects);
$student->setAge(30);
$student->setAddress($address);

echo '<pre>'; print_r($student->toArray()); echo '</pre>'; die();
