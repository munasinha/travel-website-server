<?php

use Illuminate\Database\Seeder;
use App\Models\Place;
use App\Models\Package;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $places = [         
               
            ['name' => 'sigiriya', 'lat' => '8.4342423', 'lan' => '3.4344', 'map_name' => 'sigiriya',  'discription' => 'Perhaps one of the most dramatic sights in Sri Lanka, get lost amongst the ancient remains, remarkable frescoes and water gardens at the astonishing Sigiriya Rock Fortress.Don’t miss the magnificent view from the top, with jungle and rolling hills in every direction. Who would want to leave? Sigiriya is a place that is one of the world heritage sites. This place has uncountable reasons that will make you fall in love with this place. The first thing is its beauty, which is par excellence because of the mesmerizing vegetation it has all around.', 
             'location' => 'Central Province'],
           
            ['name' => 'Nuwara Eliya', 'lat' => '6.97382', 'lan' => '80.76710000000003', 'map_name' => 'Nuwara Eliya, Central Province, Sri Lanka',  'discription' => 'A 19th century hill station Nuwara Eliya retains its colonial ambiance with its golf course, gentlemen’s clubs and mock-Tudor buildings. It is one of the most beautiful locations in Sri Lanka for a scenic rail ride.Experience the stunning views of the surrounding tea plantations, waterfalls and dramatic mountains the train takes you from Kandy to Nuwara Eliya.', 
             'location' => 'Central Province'],
           
            ['name' => 'Ella Rock', 'lat' => '6.8570353', 'lan' => '81.0546638', 'map_name' => 'Ella Rock, Bandarawela 2143, Sri Lanka',  'discription' => 'Get enamored by the stunning views through Ella Gap overlooking a spectacular gap in the southern mountain wall.Situated in the middle of beautiful countryside, with small vegetable plots, tea plantations on the hill slopes and forests on the tops this hill station is nothing less than breathtaking. Ella undoubtedly, is one of the most beautiful places to visit in Sri Lanka. ', 
             'location' => 'Central Province'],
           
            ['name' => 'Pinnawala Elephant Orphanage', 'lat' => '7.300512', 'lan' => '80.3871935', 'map_name' => 'Pinnawala Elephant Orphanage, Karandupana-Rambukkana Road, Hiriwadunna, Pinnawala 71100, Sri Lanka',  'discription' => 'Can you imagine anything as heartwarming as staring at baby elephants as they enjoy a river soak? And at this beautiful place in Sri Lanka – the Pinnawalla Elephant Orphanage you can! It won’t be hard to believe if you wouldn’t want to leave this paradise.This place is 13 km away from the town of Kegalle and one can come from any public transport. This is a very popular tourist destination and gives visitors a very different kind of experience. Watching the baby elephants doing mischief and moving here and there is a lifetime experience. One cannot get to see all this anywhere else.Situated in the middle of beautiful countryside, with small vegetable plots, tea plantations on the hill slopes and forests on the tops this hill station is nothing less than breathtaking. Ella undoubtedly, is one of the most beautiful places to visit in Sri Lanka.', 
             'location' => 'Pinnawala,Sri Lanka',],
           
            ['name' => 'Polonnaruwa', 'lat' => '7.93954', 'lan' => '81.00029999999992', 'map_name' => 'Polonnaruwa, North Central Province, Sri Lanka',  'discription' => 'You could easily spend your day imagining the ancient city life at the ruins of Polonnaruwa. Well preserved and full of archaeological treasures with hundreds of ancient structures like tombs and temples, statues and stupas it is difficult to not be amazed by the ruins here.This is known to everyone that Sri Lanka is the country of temples and also it has many monuments and heritages that depict its history and culture. Polonnaruwa is one such place that is very popular among the tourists and one will get to experience the real life of Sri Lanka here. ', 
             'location' => 'Central Province'],
           
            ['name' => 'Dambulla Cave Temple', 'lat' => '7.85665', 'lan' => '80.64840000000004', 'map_name' => 'Dambulla Cave Temple, Dambulla, මාතලේ දිස්ත්‍රික්කය, Sri Lanka',  'discription' => 'It is hard to not be stunned by the beautiful murals and statues in this beautifully preserved cave with over 150 statues of Buddha. Experience the peace and silene in this stunning cave temple that bear testimony to the extraordinary cultural artifacts in ancient Sri Lanka.', 
             'location' => 'Matale district,Central Province'],

            
        ];

        foreach ($places as $place) {
            Place::create($place);
        }


        $packages = [
            ['name' => 'Sri Lanka Highlights Tours', 'days' => '6 Days 5 Nights','image_path' => 'images/Sri Lanka Highlights Tours.jpg' , 
            'discription' => 'This tour contains most hilights places in Sri lanka.It will take 6 days and 5 nights to cover all these places.',
             'more_info' =>'<p>
            <dl>
                <dt>Day 1 :– Dambulla 
                </dt> 
                    <dd> Pickup from airport or Negambo drive to Dambulla visit cave temple.Evening elephant ride.Overnight Sigiriya.
                    </dd>
                
                <dt>Day 2:- Sigiriya , Polonnaruwa
                </dt> 
                    <dd>Early morning clime Sigiriya lion rock or pidurangala rock.After drive to Polonnaruwa visit 2nd capital(ancient site) Evening herbal treatment
                    Overnight Sigiriya.
                    </dd>
                <dt>Day 3 :– Matale / Kandy 
                </dt> 
                    <dd>Visit spice & herbal garden, Hindu temple Matale, Royal botanical garden, Kandy cultural show, Temple of tooth.Overnight Kandy.
                    </dd>
                <dt>Day 4 :– Nuwaraeliya / Ella 
                </dt> 
                    <dd>Drive to Nuwaraeliya on the way visit Ramboda waterfall, tea plantation & factory. Take train from Nanuoya to Ella.Overnight Ella</dd>
                <dt>Day 5 :– Ella / Yala 
                </dt> 
                    <dd>Clime little Adamspeak, visit Rawana waterfall, Buduruwagala rock carving. Evening Yala safari.Overnight Yala</dd>
                <dt>Day 6 :–Yala / Unawatuna 
                </dt> 
                    <dd>Visit blow hole, Wewurukannala temple, turtle farm drop off to Unawatuna or Hikkaduwa.End of the tour.</dd>
            </dl>
            '],
            ['name' => 'Cultural Tour', 'days' => '5 Days 4 Nights','image_path' => 'images/Cultural Tours' ,
             'discription' => 'Day 1 –Anuradhapura &amp; You will go on a city tour of the first capital of Sri Lanka - Anuradhapura.Overnight stay at Anuradhapura. &amp; Day 2 – Polonnaruwa &amp; Proceed to Polonnaruwa- the second capital of Sri Lanka in the 11th and 12th centuries.Visit the ruins of the Royal Palace, the Lankatilleke Vihare (3rd century AD) and the man-made Parakarama Samudra ( magnificient lake ) built by king Parakarama Bahu.Overnight stay at Polonnaruwa &amp; Day 3 –  Sigiriya &amp; Climb Sigiriya rock – the 8 th wonder of the world. &amp; Get an Elephant ride.Overnight stay at Sigiriya. &amp; Day 4 – Kandy &amp; Visit Temple of tooth. &amp; Royal Botanical Gardens.Witness a dance show. &amp; Day 5 – Pinnawala &amp; Visit Pinnawala Elephant Orphanage Back to Negombo or Colombo.',
             'more_info' =>'<p>
             <dl>
                 <dt>Day 1 :– Dambulla 
                 </dt> 
                     <dd> Pickup from airport or Negambo drive to Dambulla visit cave temple.Evening elephant ride.Overnight Sigiriya.
                     </dd>
                 
                 <dt>Day 2:- Sigiriya , Polonnaruwa
                 </dt> 
                     <dd>Early morning clime Sigiriya lion rock or pidurangala rock.After drive to Polonnaruwa visit 2nd capital(ancient site) Evening herbal treatment
                     Overnight Sigiriya.
                     </dd>
                 <dt>Day 3 :– Matale / Kandy 
                 </dt> 
                     <dd>Visit spice & herbal garden, Hindu temple Matale, Royal botanical garden, Kandy cultural show, Temple of tooth.Overnight Kandy.
                     </dd>
                 <dt>Day 4 :– Nuwaraeliya / Ella 
                 </dt> 
                     <dd>Drive to Nuwaraeliya on the way visit Ramboda waterfall, tea plantation & factory. Take train from Nanuoya to Ella.Overnight Ella</dd>
                 <dt>Day 5 :– Ella / Yala 
                 </dt> 
                     <dd>Clime little Adamspeak, visit Rawana waterfall, Buduruwagala rock carving. Evening Yala safari.Overnight Yala</dd>
                 <dt>Day 6 :–Yala / Unawatuna 
                 </dt> 
                     <dd>Visit blow hole, Wewurukannala temple, turtle farm drop off to Unawatuna or Hikkaduwa.End of the tour.</dd>
             </dl>
             '  ],

            ['name' => 'Southern Coast Tour ', 'days' => ' 7 Days 6 Nights','image_path' => 'Southern Coast Tour' ,
             'discription' => 'Day 1 – Unawatuna &amp; Journey by the coastel belt of Colombo to Galle.Leisure by the beach.Overnight stay at Unawatuna. &amp; Day 2 – Polonnaruwa &amp; Proceed to Polonnaruwa- the second capital of Sri Lanka in the 11th and 12th centuries.Visit the ruins of the Royal Palace, the Lankatilleke Vihare (3rd century AD) and the man-made Parakarama Samudra ( magnificient lake ) built by king Parakarama Bahu.Overnight stay at Polonnaruwa &amp; Day 3 –    Sigiriya &amp; Climb Sigiriya rock – the 8 th wonder of the world. &amp; Get an Elephant ride.Overnight stay at Sigiriya. &amp; Day 4 – Kandy &amp; Visit Temple of tooth. &amp; Royal Botanical Gardens.Witness a dance show. &amp; Day 5 – Pinnawala &amp; Visit Pinnawala Elephant Orphanage Back to Negombo or Colombo.', 
            'more_info' =>'<p>
            <dl>
                <dt>Day 1 :– Dambulla 
                </dt> 
                    <dd> Pickup from airport or Negambo drive to Dambulla visit cave temple.Evening elephant ride.Overnight Sigiriya.
                    </dd>
                
                <dt>Day 2:- Sigiriya , Polonnaruwa
                </dt> 
                    <dd>Early morning clime Sigiriya lion rock or pidurangala rock.After drive to Polonnaruwa visit 2nd capital(ancient site) Evening herbal treatment
                    Overnight Sigiriya.
                    </dd>
                <dt>Day 3 :– Matale / Kandy 
                </dt> 
                    <dd>Visit spice & herbal garden, Hindu temple Matale, Royal botanical garden, Kandy cultural show, Temple of tooth.Overnight Kandy.
                    </dd>
                <dt>Day 4 :– Nuwaraeliya / Ella 
                </dt> 
                    <dd>Drive to Nuwaraeliya on the way visit Ramboda waterfall, tea plantation & factory. Take train from Nanuoya to Ella.Overnight Ella</dd>
                <dt>Day 5 :– Ella / Yala 
                </dt> 
                    <dd>Clime little Adamspeak, visit Rawana waterfall, Buduruwagala rock carving. Evening Yala safari.Overnight Yala</dd>
                <dt>Day 6 :–Yala / Unawatuna 
                </dt> 
                    <dd>Visit blow hole, Wewurukannala temple, turtle farm drop off to Unawatuna or Hikkaduwa.End of the tour.</dd>
            </dl>
            ' ],
            

            ['name' => 'Discover Sri Lanka ', 'days' => '13 Days 12 Nights','image_path' => 'images/Discover Sri Lanka' ,
             'discription' => 'Day 1 –Anuradhapura &amp; You will go on a city tour of the first capital of Sri Lanka - Anuradhapura.Overnight stay at Anuradhapura. &amp; Day 2 – Polonnaruwa &amp; Proceed to Polonnaruwa- the second capital of Sri Lanka in the 11th and 12th centuries.Visit the ruins of the Royal Palace, the Lankatilleke Vihare (3rd century AD) and the man-made Parakarama Samudra ( magnificient lake ) built by king Parakarama Bahu.Overnight stay at Polonnaruwa &amp; Day 3 –  Sigiriya &amp; Climb Sigiriya rock – the 8 th wonder of the world. &amp; Get an Elephant ride.Overnight stay at Sigiriya. &amp; Day 4 – Kandy &amp; Visit Temple of tooth. &amp; Royal Botanical Gardens.Witness a dance show. &amp; Day 5 – Pinnawala &amp; Visit Pinnawala Elephant Orphanage Back to Negombo or Colombo.',
            'more_info' =>'<p>
            <dl>
                <dt>Day 1 :– Dambulla 
                </dt> 
                    <dd> Pickup from airport or Negambo drive to Dambulla visit cave temple.Evening elephant ride.Overnight Sigiriya.
                    </dd>
                
                <dt>Day 2:- Sigiriya , Polonnaruwa
                </dt> 
                    <dd>Early morning clime Sigiriya lion rock or pidurangala rock.After drive to Polonnaruwa visit 2nd capital(ancient site) Evening herbal treatment
                    Overnight Sigiriya.
                    </dd>
                <dt>Day 3 :– Matale / Kandy 
                </dt> 
                    <dd>Visit spice & herbal garden, Hindu temple Matale, Royal botanical garden, Kandy cultural show, Temple of tooth.Overnight Kandy.
                    </dd>
                <dt>Day 4 :– Nuwaraeliya / Ella 
                </dt> 
                    <dd>Drive to Nuwaraeliya on the way visit Ramboda waterfall, tea plantation & factory. Take train from Nanuoya to Ella.Overnight Ella</dd>
                <dt>Day 5 :– Ella / Yala 
                </dt> 
                    <dd>Clime little Adamspeak, visit Rawana waterfall, Buduruwagala rock carving. Evening Yala safari.Overnight Yala</dd>
                <dt>Day 6 :–Yala / Unawatuna 
                </dt> 
                    <dd>Visit blow hole, Wewurukannala temple, turtle farm drop off to Unawatuna or Hikkaduwa.End of the tour.</dd>
            </dl>
            '  ],
       
            ['name' => 'Udawalawa Safari', 'days' => '1 Days 0 Nights','image_path' => 'images/Udawalawa Safari' ,
             'discription' => 'Day 1 –Udawalawa Safari park visit morning to evining' ,
            'more_info' =>'<p>
            <dl>
                <dt>Day 1 :– Dambulla 
                </dt> 
                    <dd> Pickup from airport or Negambo drive to Dambulla visit cave temple.Evening elephant ride.Overnight Sigiriya.
                    </dd>
                
                <dt>Day 2:- Sigiriya , Polonnaruwa
                </dt> 
                    <dd>Early morning clime Sigiriya lion rock or pidurangala rock.After drive to Polonnaruwa visit 2nd capital(ancient site) Evening herbal treatment
                    Overnight Sigiriya.
                    </dd>
                <dt>Day 3 :– Matale / Kandy 
                </dt> 
                    <dd>Visit spice & herbal garden, Hindu temple Matale, Royal botanical garden, Kandy cultural show, Temple of tooth.Overnight Kandy.
                    </dd>
                <dt>Day 4 :– Nuwaraeliya / Ella 
                </dt> 
                    <dd>Drive to Nuwaraeliya on the way visit Ramboda waterfall, tea plantation & factory. Take train from Nanuoya to Ella.Overnight Ella</dd>
                <dt>Day 5 :– Ella / Yala 
                </dt> 
                    <dd>Clime little Adamspeak, visit Rawana waterfall, Buduruwagala rock carving. Evening Yala safari.Overnight Yala</dd>
                <dt>Day 6 :–Yala / Unawatuna 
                </dt> 
                    <dd>Visit blow hole, Wewurukannala temple, turtle farm drop off to Unawatuna or Hikkaduwa.End of the tour.</dd>
            </dl>
            ' ],
            
            ['name' => 'Wheals Waching', 'days' => '1 Days 0 Nights','image_path' => 'images/Wheals Waching' , 
            'discription' => 'Day 1 –Wheals Waching visit morningto evining in mirissa beach',
        'more_info' =>'<p>
            <dl>
                <dt>Day 1 :– Dambulla 
                </dt> 
                    <dd> Pickup from airport or Negambo drive to Dambulla visit cave temple.Evening elephant ride.Overnight Sigiriya.
                    </dd>
                
                <dt>Day 2:- Sigiriya , Polonnaruwa
                </dt> 
                    <dd>Early morning clime Sigiriya lion rock or pidurangala rock.After drive to Polonnaruwa visit 2nd capital(ancient site) Evening herbal treatment
                    Overnight Sigiriya.
                    </dd>
                <dt>Day 3 :– Matale / Kandy 
                </dt> 
                    <dd>Visit spice & herbal garden, Hindu temple Matale, Royal botanical garden, Kandy cultural show, Temple of tooth.Overnight Kandy.
                    </dd>
                <dt>Day 4 :– Nuwaraeliya / Ella 
                </dt> 
                    <dd>Drive to Nuwaraeliya on the way visit Ramboda waterfall, tea plantation & factory. Take train from Nanuoya to Ella.Overnight Ella</dd>
                <dt>Day 5 :– Ella / Yala 
                </dt> 
                    <dd>Clime little Adamspeak, visit Rawana waterfall, Buduruwagala rock carving. Evening Yala safari.Overnight Yala</dd>
                <dt>Day 6 :–Yala / Unawatuna 
                </dt> 
                    <dd>Visit blow hole, Wewurukannala temple, turtle farm drop off to Unawatuna or Hikkaduwa.End of the tour.</dd>
            </dl>
            '  ],

        ];

        foreach ($packages as $pckage) {
            Package::create($pckage);
        }

        $package_place = [
            ['package_id' => '1', 'place_id' => '1'],
            ['package_id' => '1', 'place_id' => '2'],
            ['package_id' => '2', 'place_id' => '3'],
            ['package_id' => '3', 'place_id' => '4'],
            ['package_id' => '4', 'place_id' => '5'],
            ['package_id' => '3', 'place_id' => '1'],
            ['package_id' => '4', 'place_id' => '3'],
        ];

       

    }
}
