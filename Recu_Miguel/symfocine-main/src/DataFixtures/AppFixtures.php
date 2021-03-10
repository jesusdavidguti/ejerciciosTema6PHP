<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pelicula;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $pelicula = new Pelicula();
        $pelicula->setTitulo("Relic");
        $pelicula->setGenero("Drama");
        $pelicula->setFechaEstreno(new \DateTime("2021/03/12"));
        $pelicula->setSinopsis("Cuando la anciana y viuda Edna desaparece sin explicación, su hija Kay y su nieta Sam acuden sin demora a la casa familiar que se encuentra solitaria y en decadencia en medio del bosque. Allí se encuentran con que Edna está mostrando señales de senilidad con cómo mantiene la casa. La abuela acaba apareciendo sin explicación, tal y como desapareció, y aunque Sam se alegra mucho de que Edna se encuentre bien, Kay empieza a preocuparse porque su madre no pueda explicar, o no quiera, dónde ha estado todo ese tiempo. El regreso de Edna estará marcado por un comportamiento extraño e impredecible que se vuelve muy volátil y agresivo, y poco apoco Kay y Sam tendrán que aceptar que hay una presencia extraña que ha tomado control de la mujer. 'Relic', una terrorífica alegoría de los estragos que causa la senilidad en nuestros mayores, un cuento sobre lo inevitable que son la muerte y la decadencia, es el debut en el largometraje de la directora y guionista australiano-japonesa Natalie Erika James, que se presentó en Sundance como la nueva 'Hereditary' por su mezcla de terror de casa encantada y drama familiar, y se pudo ver en el Festival de Sitges de 2020. El reparto lo encabezan Emily Mortimer ('La librería'), Robyn Nevin ('Top of the Lake') y Bella Heathcote ('The Neon Demon').");
        $pelicula->setDirector("Natalie Erika James");
        $pelicula->setPais("Australia");
        $manager->persist($pelicula);

        $pelicula = new Pelicula();
        $pelicula->setTitulo("Solo las bestias");
        $pelicula->setGenero("Intriga");
        $pelicula->setFechaEstreno(new \DateTime("2021/03/15"));
        $pelicula->setSinopsis("Una mujer desaparece. Después de una tormenta de nieve, su coche es descubierto en una carretera en dirección a un pueblo remoto. Mientras que la policía no sabe por donde empezar a investigar, cinco personas parecen estar ligadas a la desaparición. Y cada una de estas personas tiene su propio secreto que ocultar.");
        $pelicula->setDirector("Dominik Moll");
        $pelicula->setPais("Francia");
        $manager->persist($pelicula);

        $pelicula = new Pelicula();
        $pelicula->setTitulo("Museo Hermitage");
        $pelicula->setGenero("Documental");
        $pelicula->setFechaEstreno(new \DateTime("2021/03/11"));
        $pelicula->setSinopsis("Documental centrado en el \"Hermitage Museum\" de San Petersburgo (Rusia), creado hace más de dos siglos y con una enorme colección artística que lo convierte en el segundo museo más grande del mundo.");
        $pelicula->setDirector("Michele Mally");
        $pelicula->setPais("Italia");
        $manager->persist($pelicula);

        $pelicula = new Pelicula();
        $pelicula->setTitulo("Minari");
        $pelicula->setGenero("Drama");
        $pelicula->setFechaEstreno(new \DateTime("2021/03/13"));
        $pelicula->setSinopsis("David, un niño coreano-americano de 7 años, ve cómo a mediados de los años 80 su vida cambia, de la noche a la mañana, cuando su padre decide mudarse junto a toda su familia a una zona rural de Arkansas para abrir allí una granja, con el propósito de lograr alcanzar el sueño americano.");
        $pelicula->setDirector("Lee Isaac Chung");
        $pelicula->setPais("EEUU");
        $manager->persist($pelicula);

        $manager->flush();
    }
}
