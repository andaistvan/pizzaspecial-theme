<?php
/*
Template Name: teszt
*/

 /**
  * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://codex.wordpress.org/Template_Hierarchy
  */
 get_header();
?>

<!-- accordion teszt -->
         <ul class="accordion" data-accordion data-allow-all-closed="true">

            <li class="accordion-item" data-accordion-item>
               <a href="#" class="accordion-title">
                  <h3>Non è troppo potente l'aspirapolvere di casa per aspirare il naso del mio bambino?</h3>
               </a>
            <div class="accordion-content" data-tab-content>
               <p>
               La sezione del tubetto di collegamento ed il forellino presente nell'ampolla “B” abbattono la portata dell'aspirazione (ma non la prevalenza) dell'aspirapolvere, per cui anche in condizioni di grumi e di muco addensato, ARIANNA NASPIRAPOLVERE riesce ad aspirare ed a liberare il bambino in tutta sicurezza. E' medicalmente provato che ARIANNA NASPIRAPOLVERE elimina la secrezione nasale in modo efficiente e delicato.
               </p>
            </div>
            </li>

            <li class="accordion-item" data-accordion-item>
               <a href="#" class="accordion-title">
                  <h3>Non crea fastiti o dolore l'uso di ARIANNA ASPIRAPOLVERE?</h3>
               </a>
            <div class="accordion-content" data-tab-content>
               <p>
                  Assolutamente no, in quanto  l'aspirazione a livello del beccuccio è minima e blanda, anche se continua. Noi mamme sappiamo che a nessun bambino piace se gli si soffia il naso o si cerca in qualche modo di pulirlo, inoltre siccome sta vivendo un periodo di sofferenza generale dovuto al raffreddore è particolarmente sensibile ed irrequieto; tuttavia una profonda pulizia nasale lo farà immediatamente stare meglio ed piano piano sarà più collaborativo.
               </p>
            </div>
            </li>

            <li class="accordion-item" data-accordion-item>
               <a href="#" class="accordion-title">
                  <h3>Si può usare ARIANNA NASPIRAPOLVERE con neonati nei primi mesi di vita?</h3>
               </a>
            <div class="accordion-content" data-tab-content>
               <p>
                  A maggior ragione si! Teniamo conto che i neonati costipati non riescono a respirare e quindi a dormire. Anche la poppata sarà migliore con il nasino libero.
               </p>
            </div>
            </li>

            <li class="accordion-item" data-accordion-item>
               <a href="#" class="accordion-title">
                  <h3>Quante volte al giorno devo usare ARIANNA NASPIRAPOLVERE?</h3>
               </a>
            <div class="accordion-content" data-tab-content>
               <p>
                  Tutte le volte che vedo il bambino respirare a fatica e sento l'esigenza di soffiargli il nasino!
               </p>
            </div>
            </li>

            <li class="accordion-item" data-accordion-item>
               <a href="#" class="accordion-title">
                  <h3>Ci sono delle controindicazioni?</h3>
               </a>
            <div class="accordion-content" data-tab-content>
               <p>
                  Nessuna, come non ci sono indicazioni a soffiarsi il naso.
               </p>
            </div>
            </li>

            <li class="accordion-item" data-accordion-item>
               <a href="#" class="accordion-title">
                  <h3>Siamo in ambiente sterile usando l'aspirapolvere?</h3>
               </a>
            <div class="accordion-content" data-tab-content>
               <p>
                  Non è l'aspirapolvere che viene a contatto con il bambino; ARIANNA NASPIRAPOLVERE ne sfrutta solo il suo motore aspirante. L'importante è che ARIANNA NASPIRAPOLVERE venga pulito con cura dopo il suo uso con un sapone detergente in acqua tiepida. Non è necessario bollirlo.
               </p>
            </div>
            </li>

         </ul>
         <!-- accordion teszt -->

         <p><a data-open="exampleModal1">Click me for a modal</a></p>

         <div class="reveal" id="exampleModal1" data-reveal>
           <h1>Awesome. I Have It.</h1>
           <p class="lead">Your couch. It is mine.</p>
           <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
           <button class="close-button" data-close aria-label="Close reveal" type="button">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>


<?php
get_footer();
?>
