<?php

# membuat class Animal
class Animal
{
    # property animals
    public $animal;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $animals = ["cat", "dog", "fish"];
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        $animals = ["cat", "dog", "fish"];
        foreach ($animals as $animal) {
        echo $animal . '<br>';
}
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # gunakan method array_push untuk menambahkan data baru
        $animals = array("cat", "dog", "fish");
        array_push($animals, "lion", "pig");
        print_r($animals);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        $animals = array("0"=>"cat","1"=>"dog","2"=>"fish","3"=>"lion","4"=>"pig");
        $animal = array("0"=>"fox","1"=>"bear");
        array_splice($animals,0,2,$animal);
        print_r($animals);
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        $animals = array("0"=>"cat","1"=>"dog","2"=>"fish","3"=>"lion","4"=>"pig");
        array_splice($animals,0,1);
        print_r($animals);
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
