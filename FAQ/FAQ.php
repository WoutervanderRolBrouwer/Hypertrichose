<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>FAQ</title>
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
    img{
        height: 90px !important;
    }
</style>
<body>
    
    <!-- Navbar -->
    <header>
    <nav class="main-menu">
    
    <a href="../index.php">
  <img src="../logo/logo.svg" height="90px" alt="">
      </a>
        <ul>
                    <li><a class="home" href="../index.php" id="home">HOME</a></li>
                    <li><a class="information" href="../infopage/information.php">INFORMATION</a></li>
                    <li><a class="contact" href="../contact/contact.php">CONTACT</a></li>
                    <li><a class="behandelingen" href="../behandelingen/behandeling.php">BEHANDELINGEN</a></li>
                    <li><a class="FAQ active" href="FAQ/FAQ.php">FAQ</a></li>
                </ul>
                <ul class="login">
                <li class="login"><a class="form" href="../form/form.php">Inloggen</a></li>

            </ul>
        </nav>
    </header>



    <div class="h-screen max-w-5xl px-2 py-3 mx-auto mt-32 tracking-wide md:px-4 md:mt-44">
 <!--title-->
    <div class="flex justify-center text-3xl">Veel Gestelde Vragen</div>
 
    <div class="grid gap-3 py-8 text-lg leading-6 text-gray-800 md:gap-8 md:grid-cols-2">
        <div class="space-y-3">
        
        <!--Link boven vraag-->
        <div x-data="accordion(1)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">Hoe krijg ik Hypertrichose?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Je kan het krijgen via geboorte of door medicatie later </div>
            </div>
        </div>
       

        <!--Links midden vraag-->
        <div x-data="accordion(2)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">Hoe krijg ik Hypertrichose bij geboorte?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Bij de geboorte is het tezien als er meer haar op uw gezicht zit dan het normaal hoort te zijn. </div>
            </div>
        </div>

      

        <!--Link onder vraag-->
        <div x-data="accordion(3)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">Hoe kan ik hypertrichose later krijgen?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                U kunt het later krijgen door bepaalde medicatie of door drugs.
            </div>
            </div>
        </div>
       
        </div>

     

        <div class="space-y-3">
       
        <!-- Recht boven vraag-->
        <div x-data="accordion(4)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">Is hypertrichose doodelijk?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Hypertrichose is niet dodelijk het is alleen meer haargroei op plekken waar het normaal minder is.
            </div>
            </div>
        </div>
     

        <!-- Rechts Midden vraag-->
        <div x-data="accordion(5)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">Waar komt hypertrichose vooral voor?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Er is niet een bepaalde plek waar het voorkomt want het komt vooral door DNA van de ouders. </div>
            </div>
        </div>

        
        <!-- rechts Onder vraag-->
        <div x-data="accordion(6)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">Waar is hypertrichose als eerst gezien?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                De eerste keer dat hypertrichose was gezien waren op de canarische eilanden bij de familie van Petrus Gonsalvus
            </div>
            </div>
        </div>
       
        </div>
    </div>
    
    </div>
   

    <script>
        // Faq
        document.addEventListener("alpine:init", () => {
        Alpine.store("accordion", {
            tab: 0
        });

        Alpine.data("accordion", (idx) => ({
            init() {
            this.idx = idx;
            },
            idx: -1,
            handleClick() {
            this.$store.accordion.tab =
                this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
            return this.$store.accordion.tab === this.idx ? "-rotate-180" : "";
            },
            handleToggle() {
            return this.$store.accordion.tab === this.idx
                ? `max-height: ${this.$refs.tab.scrollHeight}px`
                : "";
            }
        }));
        });
        //  end faq

        </script>
</body>
</html>