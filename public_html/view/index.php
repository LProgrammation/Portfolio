<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Louis Potdevin</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg-gradient-purple d-flex f-wrap p-relative">

    <nav id="nav-id">


        <a href="" id="nav-burger-id" class="nav-burger">
            <div class="icon"><i class="fa fa-bars"></i></div>
        </a>
        <a href="" class="nav-btn">
            <div class="icon"><i class="fa fa-home"></i></div>
            <h2>Accueil</h2>
        </a>

        <a href="" class="nav-btn">
            <div class="icon"><i class="fa fa-briefcase"></i></div>
            <h2>Compétences</h2>
        </a>

        <a href="" class="nav-btn">
            <div class="icon"><i class="fa fa-id-card-o"></i></div>
            <h2>À propos</h2>
        </a>

        <a href="" class="nav-btn">
            <div class="icon"><i class="fa fa-book"></i></div>
            <h2>Formations</h2>
        </a>
        <a href="" id="btn-hp" class="nav-btn">
            <div class="icon"><i class="fa fa-image"></i></div>
            <h2>Image Happy (Api)</h2>
        </a>
        <a href="" id="btn-lsr" class="nav-btn">
            <div class="icon"><i class="fa fa-code"></i></div>
            <h2>LocalStorage reset</h2>
        </a>


    </nav>
    <main>

        <section id="content1">

            <section id="profil">

                <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" alt="profilImage" id="img-localstorage">

                <section id="profilInfo">
                    <h4> Potdevin Louis </h4>
                    <h4> Web Developper FullStack </h4>
                    <h4> 06 52 34 18 11 </h4>
                    <h4> Gap - 05000 - Haute Alpes </h4>
                    <p> Je suis un jeune développeur web FullStack. Suite à différentes formations,
                        je maitrise l'ensemble des langages du web tels que le PHP, le JavaScript, HTML, CSS,
                        mais également les langages tels que Python, C++, dart ainsi que les différents frameworks qui leur sont liés. </p>
                </section>

            </section>
            <form action="" id="contact-form">
                <label for="email"> Email : </label>
                <input type="text" id="contact-form-email">
                <label for="subject"> Sujet : </label>
                <input type="text" id="contact-form-subject">
                <label for="message"> Message : </label>
                <textarea id="contact-form-message"></textarea>
                <button type="submit" class="btn-submit">Submit</button>
            </form>


        </section>

        <!-- Cette section utilise tailwind pour la mise en forme -->
        <section id="content2">
            <section id="competence" class="grid grid-flow-row-dense grid-cols-3 grid-rows-3 gap-4 border border-solid border-white m-4 text-center	">
                <div>
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>PHP</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>JavaScript</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>CSS</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>Sass</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>Python</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>Dart</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>C++</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>Git</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>Flutter</h2>
                </div>
                <div class=" ">
                    <img src="https://www.generationsforpeace.org/wp-content/uploads/2018/03/empty.jpg" id="img-localstorage" alt="">
                    <h2>Symfony</h2>
                </div>
                    
            </section>
        </section>

    </main>

    <footer>
        <h2>Portfolio - Louis Potdevin - 2024 </h2>
    </footer>

    <script src="./js/index.js"></script>
</body>


</html>