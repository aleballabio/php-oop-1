<?php
class Movies
{

    private string $title;
    private string $producer;
    private string $sala;
    private array $genres;
    private int $year;
    private string $orario;
    private float $price;

    public function __construct($_title, $_producer)
    {
        $this->title = $_title;
        $this->producer = $_producer;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getProducer()
    {
        return $this->producer;
    }


    public function setSala($_sala)
    {
        $this->sala = $_sala;
    }

    public function getSala()
    {
        return $this->sala;
    }

    public function setGenres($_genres)
    {
        $this->genres = $_genres;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setYear($_year)
    {
        $this->year = $_year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setOrario($_orario)
    {
        $this->orario = $_orario;
    }

    public function getOrario()
    {
        return $this->orario;
    }

    public function setPrice($_price)
    {
        $this->price = $_price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getFinalprice()
    {
        if ($this->year < 2022) {
            return number_format($this->price);
        } else 
        {
            return number_format($this->price = $this->price + 10);
        }
    }
}

$movie_1 = new Movies('Inside Out', 'Pixar');
$movie_1->setGenres(['Animazione', 'Avventura', 'Family']);
$movie_1->setYear(2022);
$movie_1->setOrario('20:30');
$movie_1->setPrice(10.50);
$movie_1->setSala('Sala 10');

$movie_2 = new Movies('Mario Bros', 'Nintendo');
$movie_2->setGenres(['Animazione', 'Avventura', 'Family', 'Umoristico', 'Videogiochi']);
$movie_2->setYear(2000);
$movie_2->setOrario('22:30');
$movie_2->setPrice(10.50);
$movie_2->setSala('Sala 7');

?>

<h1>Cinema Scugnizzo</h1>

<h2><?= $movie_1->getTitle() ?></h2>
<li>Prodotto da: <?= $movie_1->getProducer() ?></li>
<li>Generi: <?php foreach ($movie_1->getGenres() as $value) {
                echo $value .  ', ';
            } ?>
</li>
<li>Year: <?= $movie_1->getYear() ?></li>
<li>Orario: <?= $movie_1->getOrario() ?></li>
<li>Sala: <?= $movie_1->getSala() ?></li>
<li>Costo: <?= '$' . $movie_1->getFinalprice() ?></li>
</ul>

<h2><?= $movie_2->getTitle() ?></h2>
<li>Prodotto da: <?= $movie_2->getProducer() ?></li>
<li>Generi: <?php foreach ($movie_2->getGenres() as $value) {
                echo $value .  ', ';
            } ?>
</li>
<li>Year: <?= $movie_2->getYear() ?></li>
<li>Orario: <?= $movie_2->getOrario() ?></li>
<li>Sala: <?= $movie_2->getSala() ?></li>
<li>Costo: <?= '$' . $movie_2->getFinalprice() ?></li>
</ul>