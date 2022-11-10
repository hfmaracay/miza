<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    News::factory()->create([
      'name' => 'VI Convención Anual de Fundación  AmbLeMa',
      'description' => '<p>Parte del equipo MIZA, Oswaldo Hernández y José Clavijo A., y nuestro aliado Fernando Jáuregui de Ecoprácticas participarán, el 17-19/01/2020, en la VI Convención Anual de Fundación  AmbLeMa. Gracias al Lic Tomás Linares por su invitación.</p>',
      'image' => '2020-01-16.jpg',
      'created_at' => '2020-01-16'
    ]);

    News::factory()->create([
      'name' => 'Donación de Lámparas de la compañía New Light',
      'description' => '<p>El MIZA quiere agradecer a la compañía New Light por la donación de lámparas para nuestras instalaciones, logrando así mejorar nuestras actividades. Todo esto fue posible gracias a nuestra colega y amiga Ing Pihsia Chen quien amablemente realizó todas las gestiones para lograr esta ayuda. Para nosotros es esencial este tipo de colaboraciones, ya que nuestro presupuesto es ínfimo para la cantidad de materiales y equipos que necesitamos. Nuestras colecciones, de más de 3,5 millones de ejemplares, son unas de las más importantes de Sudamérica. Gracias Sres New Light e Ing Chen, eternamente agradecidos. Equipo MIZA.</p>',
      'image' => '2020-01-20.jpg',
      'created_at' => '2020-01-20'
    ]);

    News::factory()->create([
      'name' => 'Donación de Alan Highton',
      'description' => '<p>El MIZA quiere agradecer al colega y amigo Alan Highton, afamado guía de naturaleza, por su generoso aporte para que podamos seguir conservando, en perfecto estado, nuestras colecciones, en momentos tan difíciles que viven nuestras instituciones universitarias. Alan es muy conocido por sus guiaturas para observar el Relámpago del Catatumbo. ¡Gracias Alan!, como siempre el MIZA es tu casa.</p>',
      'image' => '2020-01-21.jpg',
      'created_at' => '2020-01-21'
    ]);

    News::factory()->create([
      'name' => 'Game Jam Maracay 2020',
      'description' => '<p>Iniciando el Game Jam 2020. MIZA les da la bienvenida y muchos éxitos en estos tres días que durará el evento. ¡Diviértanse!</p>',
      'image' => '2020-01-31.jpg',
      'created_at' => '2020-01-31'
    ]);

    News::factory()->create([
      'name' => 'Visita del Dr. Bernhard A. Huber',
      'description' => '<p>Por segundo año consecutivo nos está visitando el Dr. Bernhard A. Huber, quien trabaja en el Alexander Koenig Zoological Research Museum, en Alemania. El Dr Huber specialista mundial en taxonomía y sistemática de arañas de la familia Pholcidae (daddy long legs). Por varias semanas estará trabajando con el Prof Quintín Arias (MIZA) y el Dr. Osvaldo Villarreal, Asociado MIZA, en la importante Colección del Dr Manuel Gonzalez-Sponga, la cual fue donada al MIZA. Muchas gracias al Dr Huber y le deseamos el mayor de los éxitos durante su estadía en Venezuela.</p>',
      'image' => '2020-02-05.jpg',
      'created_at' => '2020-02-05'
    ]);

    News::factory()->create([
      'name' => 'Visita de los grupos Scouts Ciudad Jardin y Libertador',
      'description' => '<p>Hoy nos visitaron los grupos Scouts Ciudad Jardin y Libertador con quien disfrutamos una interesante visita. Nos acompañó el Ing Diomar Castellanos, de “Amigos MIZA”, quien habló sobre impacto en la biodiversidad y salud pública que producen incendios de vegetación. Una agradable mañana con jóvenes, esos que serán nuestro futuro. ¡Gracias!</p>',
      'image' => '2020-02-15.jpg',
      'created_at' => '2020-02-15'
    ]);

    News::factory()->create([
      'name' => 'Visita del Prof Tomás Linares de Fundación Amblema y el actor/titiritero José Monsalve',
      'description' => '<p>Esta tarde estuvimos reunidos con el Prof Tomás Linares de Fundación Amblema y el actor/titiritero José Monsalve, afinando un nuevo proyecto que estamos seguros será del agrado de grandes y chicos. Educación, arte y biodiversidad, interesante conjunción para una mejor sociedad.</p>',
      'image' => '2020-02-19.jpg',
      'created_at' => '2020-02-19'
    ]);

    News::factory()->create([
      'name' => 'Visita del ilustrador científico Joaquin Salcedoy su hijo Prof. Rodolfo Salcedo de la UPEL Maracay',
      'description' => '<p>Recibimos la visita de nuestro querido amigo Joaquin Salcedo, ilustrador científico que laboró por muchos años en el IZA, FAGRO, UCV y su hijo Prof. Rodolfo Salcedo Maracay, UPEL, con los que compartimos interesantes ideas de proyectos que podríamos realizar, usando la gran experiencia y condiciones artísticas de Joaquín. Gracias por la visita y ojalá muy pronto lo tengamos por el MIZA enseñando sus técnicas. ¡Bienvenidos!</p>',
      'image' => '2020-02-20.jpg',
      'created_at' => '2020-02-20'
    ]);

    News::factory()->create([
      'name' => 'Donanción de ventanas de los amigos Vicente Ciccola y Diomar Castellanos',
      'description' => '<p>Muchas gracias a los amigos Vicente Ciccola y Diomar Castellanos, quienes hicieron posible la construcción e instalación de dos ventanas, esenciales para el area de exhibición de nuestro museo. Esta contribución mejorará enormemente las actividades que allí se realizan y hará un ambiente más agradable para nuestros numerosos visitantes. Eventos como estos nos hacen tener fe que juntos podremos seguir mejorando día a día, haciendo que el MIZA pueda dar mejores servicios a sus visitantes y mantener sus valiosas colecciones en excelentes condiciones. Gracias a los amigos Ciccola y Castellanos, Ustedes ya son parte del MIZA, un museo de todos para Venezuela.</p>',
      'image' => '2020-02-22-B.jpg',
      'created_at' => '2020-02-22'
    ]);

    News::factory()->create([
      'name' => 'Visita de los investigadores Yurasi Briceño, Luz Carrillo y Leonardo Sanchez',
      'description' => '<p>Agradable visita y excelente conversación con los investigadores Yurasi Briceño, Luz Carrillo y Leonardo Sanchez, del Centro para la Investigación de Tiburones de Venezuela, del IVIC. Discutimos su posible participación en la exposición permanente en Biodiversidad, que desarrollará MIZA junto con diversas organizaciones y personas que trabajan en biodiversidad. Muchas ideas y seguro algo bueno saldrá¡Gracias por compartir y el MIZA es su casa!</p>',
      'image' => '2020-02-22.jpg',
      'created_at' => '2020-02-22'
    ]);

    News::factory()->create([
      'name' => 'Visita del Sr Luca Baldissera experto en bomsai',
      'description' => '<p>El MIZA, promocionando aquellos aspectos relacionados con Biodiversidad, sostuvo interesante reunión con el Sr Luca Baldissera, experto en bomsai. Vendrán interesantes eventos referentes a ese tema, incluyendo exposiciones, charlas y talleres para aprender sobre tan interesante técnica. Nos acompañó el Ing. Diomar Castellanos de “Amigos MIZA”. Pendientes por acá de las fechas de estos eventos.</p>',
      'image' => '2020-02-23.jpg',
      'created_at' => '2020-02-23'
    ]);

    News::factory()->create([
      'name' => 'Visita de Rómulo Guardia, Presidente de Angostura Media',
      'description' => '<p>Grata y productiva reunión con el amigo Rómulo GuardiaG., Presidente de Angostura Media. Muchas ideas y agradecidos por el apoyo que tan prestigiosa empresa dará al MIZA. Uniendo esfuerzos para conservar, estudiar y divulgar el inmenso patrimonio nacional que MIZA mantiene, una responsabilidad de país. Gracias amigo Rómulo y a todo su personal, venezolanos jóvenes con visión de futuro.</p>
      <p>Foto: Rómulo Guardia, Diomar Castellanos (Amigos MIZA), y José Clavijo A.</p>',
      'image' => '2020-03-04.jpg',
      'created_at' => '2020-03-04'
    ]);

    News::factory()->create([
      'name' => 'Visita de la Biol. Maria Fernada Puerto-Carrillo, del IVIC',
      'description' => '<p>Tuvimos la agradable visita de la Biol. Maria Fernada Puerto-Carrillo, del IVIC, quien coordina el proyecto Sebraba Venezuela cuyo objetivo es promover el estudio y conservación de los jaguares (Panthera onca) en el sur del Lago de Maracaibo. Pudimos discutir diversos temas, entre los que destaca la realización de una exposición fotográfica sobre Los jaguares del sur del Lago de Maracaibo, que esperamos tenerla por el MIZA próximamente. La acompañó nuestro colega Ing Oswaldo Hernadez (Asociado al MIZA). Gracias María Fernanda por el apoyo en traer tu bella exposición a nuestro museo, dándole oportunidad que tu maravilloso trabajo sea conocido por muchas más personas, incluidos niños y jóvenes, nuestro futuro. Siempre bienvenida, el MIZA es tu casa.</p>',
      'image' => '2020-03-10.jpg',
      'created_at' => '2020-03-10'
    ]);

    News::factory()->create([
      'name' => 'Aportes por parte de Papusa, Siete al Cubo, y Gabi Valladares',
      'description' => '<p>El MIZA quiere agradecer a Papusa, Siete al Cubo, y Gabi Valladares por su generosa contribución a nuestro museo para que podamos seguir conservando, estudiando y mostrando al público, las valiosas colecciones bajo nuestro cuidado y el valor de la biodiversidad para nuestra sociedad. Estos aportes están siendo dados por la venta de cada una de sus bellas franelas de nuestra Mariposa Nacional, Morpho Helenor Cramer. Este maravilloso gesto surgió de manera espontánea por parte de sus dueños, un ejemplo más que en Venezuela hay gente que aprecia nuestra rica biodiversidad y el valor de las instituciones que velamos por ella. Muchas gracias estimados amigos, el MIZA y Venezuela, siempre le estarán agradecidos por tan extraordinario gesto. El MIZA es su casa. ¡Bienvenidos!</p>',
      'image' => '2020-04-30-B.jpg',
      'created_at' => '2020-04-30'
    ]);

    News::factory()->create([
      'name' => 'Necesitamos ayuda para reparar aire acondicionado',
      'description' => '<p>El MIZA necesita la ayuda de todos. Constantes fallas en el sistema eléctrico nacional ocasionó daños al aire acondicionado que mantienen nuestras valiosas colecciones científicas, destruyendo uno de los compresores. ¿Puede ayudarnos? Necesitamos, por favor, los siguientes equipos y materiales: 1Compresor de 5 Ton. trifásico; 10 Litros de dieléctrico para limpieza; 1 Filtro 5 Ton. con tuerca de 3/8; 5 Kg. Gas Freon 22; 4 Varillas de plata para soldar.</p>
      <p>Cualquier persona, institución pública o privada, que pueda colaborar, estará contribuyendo a preservar un patrimonio nacional invaluable, con más de 3,5 millones de ejemplares, la mayor colección de insectos de Venezuela y una de las más importantes de Sudamérica. Agradecemos toda su colaboración, incluyendo difundir esta solicitud. ¡MUCHAS GRACIAS!</p>',
      'image' => '2020-04-30.jpg',
      'created_at' => '2020-04-30'
    ]);

    News::factory()->create([
      'name' => 'Entrevista con Albani Lozada y Unai Amenabar en Agenda Éxitos 99.9FM',
      'description' => '<p>Hoy 11:45 am, con Albani Lozada y Unai Amenabar en Agenda Éxitos 99.9FM, Circuito Éxitos, Caracas, estaremos conversando sobre el avispón gigante asiático y la polilla gitana, insectos en tiempos de pandemia. ¡Bienvenidos!</p>',
      'image' => '2020-05-12.jpg',
      'created_at' => '2020-05-12'
    ]);

    News::factory()->create([
      'name' => 'Entrevista con el periodista Román Lozinski @rlozinski en su programa “Intermedio” por el canal de televisión IVC',
      'description' => '<p>Hoy, para nuestros amigos que están en U.S.A, Latinoamérica y algunas islas del Caribe, estaremos en Televisión IVC, con el periodista Román Lozinski @rlozinski en su programa “Intermedio”, conversando sobre el “avispón asiático” y la “polilla gitana”, especies que están causando alarma en EEUU y algunos países de la región.</p>
      <p>Países y canales donde se podrán ver, a partir de las 10PM, son:</p>
      <ul>
        <li>PANAMÁ: Cable Onda 452 y 1452 HD</li>
        <li>REPÚBLICA DOMINICANA: Telecable central 306</li>
        <li>ARGENTINA, CHILE, URUGUAY, COLOMBIA, PERÚ, ECUADOR Y LAS ISLAS DEL CARIBE: TRINIDAD Y TOBAGO, ARUBA, CURAZAO Y BONAIRE: Directv 235 y 1235 HD</li>
        <li>EE.UU: Directv: 425 y 427</li>
        <li>Comcast: 654</li>
        <li>Spectrum: 867</li>
      </u>
      <p>No se transmite para Venezuela.</p>
      <p>Muchas gracias y bienvenidos a sintonizar este programa. Gracias a Roman Lozinski por la invitación. Equipo MIZA.</p>',
      'image' => '2020-05-14.jpg',
      'created_at' => '2020-05-14'
    ]);

    News::factory()->create([
      'name' => 'Entrevista en el programa "Con María Eugenia Jirón", en Éxitos 95.3 FM',
      'description' => '<p>Estaremos en el programa "Con María Eugenia Jirón", en Éxitos 95.3 FM, Pto La Cruz, Anzoátegui, Venezuela, conversando sobre “Los Insectos en tiempos de cuarentena”. ¡Bienvenidos!</p>',
      'image' => '2020-05-22.jpg',
      'created_at' => '2020-05-22'
    ]);

    News::factory()->create([
      'name' => 'Excelente Noticia: ¡Reparado el aire acondicionado!',
      'description' => '<p>AMIGOS, EXCELENTE NOTICIA, el aire acondicionado que protege nuestras colecciones ha sido reparado. Esto fue posible gracias a la colaboración de un grupo de personas que ayudaron a comprar el equipo, materiales y pago de la mano de obra.</p>
      <p>Queremos agradecer a nuestros amigos y colegas:</p>
      <p>Mauro Costa, Andrew Neild, Stephane Attal, Patrick Blandin, Angel Viloria P., Benmesbah Mohamed, Rómulo Guardia G., Kevin Esaa, Ali Arturo Ruiz C., Doris Chirinos T., Edgar Gudiño, Marcela Blanco de Gudiño, Ivan Pinto C, Mariana Díaz, PaPusa, SieteAlCubo, Gabi Valladares, Francisco Herrera, Christina Cabello, Mariana Ramathón, Inversiones Gigacom y Maria Valecillo.</p>
      <p>Muy especialmente queremos agradecer al Ing Diomar Castellanos por todo el esfuerzo, en momentos tan complicados para movilizarse, por la cuarentena y escasez de gasolina, coordinar dicha reparación de manera exitosa.</p>
      <p>Finalmente a todos los amigos, que con sus palabras de aliento, RT e ideas, contribuyeron a que el inmenso patrimonio representado por los 3,5 millones de ejemplares, hoy puedan de nuevo tener las condiciones ambientales adecuadas. ¡MUCHAS GRACIAS A TODOS!</p>',
      'image' => '2020-06-02.jpg',
      'created_at' => '2020-06-02'
    ]);

    News::factory()->create([
      'name' => 'Mantenimiento de la impermeabilización del MIZA',
      'description' => '<p>La platabanda del MIZA se terminó ayer de pintar para reforzar la impermeabilización, logrando asegurar que no ocurran filtraciones. Muchas gracias al Sr Rómulo Guardia G. por su colaboración que hizo posible este mantenimiento, luego de años sin haberse podido realizar. Así mismo queremos agradecer a nuestro amigo y colaborador Ing Diomar Castellanos por todo su apoyo en coordinar este trabajo y muchos otros en nuestro museo. Es importante señalar el apoyo dado por nuestros amigos de la prensa y los presentes en diversas redes sociales por todo su apoyo: @kurucuteando @quehayenmaracay @ecopracticas @sembramostodos @veedoresxlaeducacion @cronicamaracay
      @joseignaciomore @amiramucic @borolaki @inspiracionpositiva @celisapecorelli @churuguaraf @josealirg @delfinbeta @marcoah17 @exitosplc @exitos931 @papusanet @sietealcubo @gabipapusa A todos muchísimas gracias, el MIZA es su casa. 
      </p>',
      'image' => '2020-06-05.jpg',
      'created_at' => '2020-06-05'
    ]);

    News::factory()->create([
      'name' => 'Visita de los amigos Dario Ciccola y Alberto Velazco',
      'description' => '<p>Estuvieron los amigos Dario Ciccola y Alberto Velazco, visitando nuestras instalaciones para coordinar algunas reparaciones con las que contribuirán, una de ellas nuestra entrada vehicular. Muchas gracias por su constante apoyo y entusiasmo. Con tu ayuda, juntos podremos mejorar, día a día.</p>',
      'image' => '2020-06-11.jpg',
      'created_at' => '2020-06-11'
    ]);

    News::factory()->create([
      'name' => 'Revista de la Academia Nacional de Medicina',
      'description' => '<p>Queremos agradecer a la Academia Nacional de Medicina y al Editor de su prestigiosa revista, Dr. Alberto Paniz M. por el artículo sobre nuestro museo. Para ayudar a conservar este patrimonio nacional es clave que se de a conocer. ¡Muchas gracias! academianacionaldemedicina.org/publicaciones</p>',
      'image' => '2020-06-12.jpg',
      'created_at' => '2020-06-12'
    ]);

    News::factory()->create([
      'name' => 'Reparación del portón gracias a los amigos Vicente y Dario Ciccola',
      'description' => '<p>Gracias a la colaboración de nuestros amigos Vicente y Dario Ciccola, se pudo reparar el portón de entrada vehicular del MIZA. Muchas gracias por su constante apoyo y entusiasmo en estos tiempos tan complicados para todos. Si la sociedad nos apoya, entre todos podremos ayudar a conservar, en perfecto estado, este inmenso patrimonio nacional. En la foto, Sr Alberto Velazco.</p>',
      'image' => '2020-07-15.jpg',
      'created_at' => '2020-07-15'
    ]);

    News::factory()->create([
      'name' => 'Entrega del premio del concurso “¿Cuál es la Mariposa Nacional de Venezuela?”',
      'description' => '<p>Entrega del premio del concurso “¿Cuál es la Mariposa Nacional de Venezuela?”, patrocinado por Tiendas Don Juan (Caracas) y el programa radial Residuos Limpios, Nery Sanchez Recibe Oswaldo Hernandez (Asociado MIZA) en nombre del ganador, Sr. Daniel Ortiz.</p>
      <p>Este tipo de iniciativas entre empresas, medios de comunicación e instituciones de investigación/educación, contribuyen a que nuestra sociedad conozca la biodiversidad que la rodea y su papel esencial para nuestra vida cotidiana y el futuro como país.</p>
      <p>Las colecciones del MIZA UCV, consideradas patrimonio nacional y una de las más importantes de Sudamérica, pueden mantenerse, estudiarse y darse a conocer, gracias a esfuerzos como este. Muchas gracias a Tiendas Don Juan y al programa radial Residuos Limpios, Lic Nery Sánchez por todo su apoyo, juntos seguiremos avanzando. Equipo MIZA.</p>
      <p>Foto: Ana Ruggeri, Oswaldo Hernandez, Nery Sánchez y Mauricio Briceño.</p>',
      'image' => '2020-08-14.jpg',
      'created_at' => '2020-08-14'
    ]);

    News::factory()->create([
      'name' => 'Visita del grupo eco-senderistas “La Manada”',
      'description' => '<p>Nos reunimos con el grupo eco-senderistas “La Manada”, representados por Ronald Ferichelli, Diahann Moreno y Betzy Diaz, y nuestros colaboradores y amigos José Rodriguez, Fabiola Borregales y Diomar Castellanos, para discutir la posibilidad de realizar proyectos y otras acciones en pro de nuestra biodiversidad, su estudio, conservación y uso sostenible. Una reunión muy productiva y con energía. Gracias a todos por participar y aportar interesantes ideas que juntos podremos desarrollar. Equipo MIZA.</p>',
      'image' => '2020-08-26.jpg',
      'created_at' => '2020-08-26'
    ]);

    News::factory()->create([
      'name' => 'El Ing. Diomar Castellanos apoyando en el mantenimiento de las instalaciones',
      'description' => '<p>Nuestro amigo y benefactor, Ing. Diomar Castellanos nuevamente ayudando a mantener las instalaciones del MIZA. Muy agradecidos por su constante apoyo, no solo en lo material sino en ese permanente aliento tan necesarios en estos tiempos tan difíciles que vivimos. El mantener este inmenso patrimonio, que representan las colecciones allí depositadas de más de 3,5 millones de ejemplares, solo es posible gracias a la colaboración de organizaciones privadas y ciudadanos. Gracias a todos los que han hecho esto posible. ¡Juntos lo lograremos! Equipo MIZA.</p>',
      'image' => '2020-08-30.jpg',
      'created_at' => '2020-08-30'
    ]);

    News::factory()->create([
      'name' => 'Entrevista en el programa Ciudad Éxitos por Exitos 95.3 FM',
      'description' => '<p>Mañana estaremos en el programa Ciudad Éxitos, 2-3pm con Licda Maria Eugenia Jirón por Exitos 95.3 FM, en Puerto La Cruz, hablando de la migración de mariposas. También lo pueden oír por Exitosfm.com ¡Bienvenidos!</p>',
      'image' => '2020-08-31.jpg',
      'created_at' => '2020-08-31'
    ]);

    News::factory()->create([
      'name' => 'Jornada de limpieza con nuestros amigos del grupo EcoSenderistas “La Manada”',
      'description' => '<p>Muy agradecidos con nuestros amigos del grupo EcoSenderistas “La Manada” por su extraordinario apoyo para hacer el mantenimiento de las áreas internas y externas de nuestro edificio. Luego de tantos meses sin poder contar con el personal responsable de esas funciones, debido a la cuarentena y problemas por la escasez de gasolina, su ayuda es realmente muy importante y de allí nuestro agradecimiento y aprecio. Lo próximo será desarrollar varias iniciativas en pro de la biodiversidad, su estudio, documentación y uso sostenible, algo ya discutido y con propuestas muy interesantes. ¡Gracias amigos! Equipo MIZA.</p>',
      'image' => '2020-09-05.jpg',
      'created_at' => '2020-09-05'
    ]);

    News::factory()->create([
      'name' => 'Entrevista en el programa “Mañaneando con Sonorama”, en Sonorama 94.5 FM',
      'description' => '<p>Hoy 6/09/2020, 9:15am estaremos con nuestro amigo y gran colaborador del MIZA, José Rodríguez en su ameno programa “Mañaneando con Sonorama”, en Sonorama 94.5 FM, Maracay, conversando sobre la migración de mariposas y otros aspectos de interés. ¡Bienvenidos!</p>',
      'image' => '2020-09-06.jpg',
      'created_at' => '2020-09-06'
    ]);

    News::factory()->create([
      'name' => 'Entrevista con Licda Dhameliz Diaz en su programa “LO CREAS O NO por Onda 100.9FM',
      'description' => '<p>Hoy 17/09/2020, 3:20pm, estaremos con Licda Dhameliz Diaz en su programa “LO CREAS O NO por Onda 100.9FM, Valencia, Union Radio,  hablando sobre “Migración de mariposas y su impacto en la apreciación ciudadana de la biodiversidad” ¡Bienvenidos!</p>',
      'image' => '2020-09-17.jpg',
      'created_at' => '2020-09-17'
    ]);

    News::factory()->create([
      'name' => 'Visita y donación de la Sra María A. Seijas Y. de BioTec Plus C.A.',
      'description' => '<p>Hoy 23/09/2020, recibimos la agradable visita de la Sra María A. Seijas Y.  De BioTec Plus C.A. quien amablemente nos trajo un kit de su producto para desinfectar, clave para la pandemia que sufrimos.</p>',
      'image' => '2020-09-23.jpg',
      'created_at' => '2020-09-23'
    ]);
  }
}
