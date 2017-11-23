<?php

use Illuminate\Database\Seeder;
use App\Film;

class filmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $filmOne=new Film;
      $filmOne->name="Deadpool";
      $filmOne->description="Deadpool is a 2016 American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox. It is the eighth installment of the X-Men film series. The film was directed by Tim Miller from a screenplay by Rhett Reese and Paul Wernick, and stars Ryan Reynolds in the title role alongside Morena Baccarin, Ed Skrein, T. J. Miller, Gina Carano, Leslie Uggams, Brianna Hildebrand, and Stefan Kapičić. In Deadpool, Wade Wilson hunts the man who gave him mutant abilities, but also a scarred physical appearance, as the antihero Deadpool.";
      $filmOne->release_date="2016-02-08";
      $filmOne->rating=4;
      $filmOne->ticket_price=75;
      $filmOne->country="USA";
      $filmOne->genre="action,comedy,romance";
      $photo=public_path('images/deadpool.jpg');
      $photo=explode('/',$photo);
      $filmOne->photo=end($photo);
      $filmOne->save();


      $filmTwo=new Film;
      $filmTwo->name="Logan";
      $filmTwo->description="Logan is a 2017 American superhero film, produced by Marvel Entertainment, TSG Entertainment and The Donners' Company, and distributed by 20th Century Fox.[3][4] It is the tenth installment in the X-Men film series, as well as the third and final Wolverine solo film following X-Men Origins: Wolverine (2009) and The Wolverine (2013). The film, which takes inspiration from the Old Man Logan comic-book series by Mark Millar and Steve McNiven, follows an aged Wolverine and an extremely ill Professor X defending the former's biological Mexican daughter Laura from the villainous Reavers and Alkali-Transigen led by Donald Pierce and Zander Rice, respectively.";
      $filmTwo->release_date="2017-02-17";
      $filmTwo->rating=4;
      $filmTwo->ticket_price=60;
      $filmTwo->country="USA";
      $filmTwo->genre="action,family,sci-fi";
      $photo=public_path('images/logan.jpg');
      $photo=explode('/',$photo);
      $filmTwo->photo=end($photo);
      //$filmTwo->photo=public_path('images/logan.jpg');
      $filmTwo->save();

      $filmThree=new Film;
      $filmThree->name="Spider-Man: Homecoming";
      $filmThree->description="Spider-Man: Homecoming is a 2017 American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing. It is the second Spider-Man film reboot and the sixteenth film of the Marvel Cinematic Universe (MCU). The film is directed by Jon Watts, from a screenplay by the writing teams of Jonathan Goldstein and John Francis Daley, Watts and Christopher Ford, and Chris McKenna and Erik Sommers. Tom Holland stars as Spider-Man, alongside Michael Keaton, Jon Favreau, Zendaya, Donald Glover, Tyne Daly, Marisa Tomei and Robert Downey Jr. In Spider-Man: Homecoming, Peter Parker tries to balance high school life with being Spider-Man, while facing the Vulture.";
      $filmThree->release_date="2017-02-17";
      $filmThree->rating=3;
      $filmThree->ticket_price=50;
      $filmThree->country="USA";
      $filmThree->genre="action,comedy,sci-fi";
      $photo=public_path('images/spiderman.jpg');
      $photo=explode('/',$photo);
      $filmThree->photo=end($photo);
      //$filmThree->photo=public_path('images/spiderman.jpg');
      $filmThree->save();

      $filmFour=new Film;
      $filmFour->name="Dunkirk";
      $filmFour->description="Dunkirk is a 2017 war film written, directed, and co-produced by Christopher Nolan that depicts World War II's Dunkirk evacuation. Its ensemble cast includes Fionn Whitehead, Tom Glynn-Carney, Jack Lowden, Harry Styles, Aneurin Barnard, James D'Arcy, Barry Keoghan, Kenneth Branagh, Cillian Murphy, Mark Rylance, and Tom Hardy. The film is a British, American, French, and Dutch co-production, distributed by Warner Bros. Pictures.";
      $filmFour->release_date="2017-07-17";
      $filmFour->rating=5;
      $filmFour->ticket_price=100;
      $filmFour->country="USA";
      $filmFour->genre="action,history,family";
      $photo=public_path('images/dunkirk.jpg');
      $photo=explode('/',$photo);
      $filmFour->photo=end($photo);
      //$filmThree->photo=public_path('images/spiderman.jpg');
      $filmFour->save();

      }
    }
