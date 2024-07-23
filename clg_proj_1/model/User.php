<?php
namespace Clg_proj_1\Model;
class User {
    public int $id;
    public string $first_name;
    public string $last_name;
    public int $age;
    public string $address;
    public string $email;
    public string $password;
    public string $first_created;
    public string $last_updated;

    public function __construct(
        int $id,
        string $first_name,
        string $last_name,
        int $age,
        string $address,
        string $email,
        string $password,
        string $first_created,
        string $last_updated
    ) {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->first_created = $first_created;
        $this->last_updated = $last_updated;
    }
}

?>
