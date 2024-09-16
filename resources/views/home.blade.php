<x-app-layout>
    @include('partials.envelope')

    <div class="w-screen max-w-screen-sm mx-auto overflow-x-hidden lg:mr-0">
        <div class="relative flex flex-col justify-center h-screen bg-primary">
            <img src="/images/bg/bg-1.png" alt="bg" class="absolute bottom-0 left-0 w-full">
            <div class="absolute top-0 z-10 w-full sm:-top-12">
                <img src="/images/garnish-1.png" alt="hiasan" class="w-full sm:h-36">
            </div>
            {{-- Shadow top --}}
            <div class="absolute top-0 w-full rounded-full -translate-y-2/3 aspect-square blur-[200px] bg-secondary">
            </div>

            <div class="-translate-y-8 sm:translate-y-0">
                <img src="/images/title.png" alt="title">
                <h1
                    class="text-5xl font-extrabold text-center -translate-y-1/2 text-secondary font-montserrat sm:-translate-y-[200%]">
                    SMK
                    NEGERI 7
                    BATAM</h1>
            </div>

            {{-- Bottom Garnish --}}
            <img src="/images/garnish-1.png" alt="hiasan"
                class="absolute bottom-0 z-30 w-full rotate-180 sm:max-h-36 sm:-bottom-12">
            <img src="/images/garnish-1.png" alt="hiasan"
                class="absolute z-10 w-full rotate-180 bottom-12 sm:max-h-36 sm:-bottom-24">
            <h2
                class="absolute z-20 sm:hidden font-montaga leading-none w-full text-center bottom-28 text-[#DDAC17]/50 text-[200px] [--webkit-text-stroke:1px_#fff]">
                11</h2>
            {{-- Shadow bottom --}}
            <div class="absolute bottom-0 w-full rounded-full translate-y-2/3 aspect-square blur-[200px] bg-secondary">
            </div>
        </div>

        <div class="min-h-screen px-[30px] py-24 bg-[#F8DCA2] relative z-10">
            <img src="/images/garnish-2.svg" alt="hiasan" class="absolute top-0 left-0 w-full">
            <div class="relative z-10">
                <div class="w-full mb-8">
                    <img src="/images/kepsek.jpg" alt="kepsek"
                        class="object-cover object-center mx-auto mb-4 overflow-hidden rounded-full size-48">
                    <h2 class="text-xl font-bold text-center">Kepala SMK Negeri 7 Batam</h2>
                    <h2 class="text-xl font-bold text-center">NURSYA'BANI, M.Pd</h2>
                </div>
                <h1 class="mb-4 text-3xl font-black text-center">Sekapur Sirih</h1>
                <p class="mb-6 text-lg font-medium text-center font-inter">Bismillaahirrahmaanirrahiim, Assalamualaikum
                    Warahmatullah Wabarakatuh.</p>
                <p class="pb-4 mb-6 text-lg font-medium text-center font-inter">Salam Sejahtera untuk kita semua,
                    Alhamdullilahhirobilalamin, puji syukur kehadirat
                    Allah Subhana
                    Wata'ala atas berkah nikmat rahmat dan karuniaNya pada tahun ini SMK Negeri 7 memasuki usia 11
                    tahun.
                    Sampai saat ini semakin bertumbuh menjadi sekolah yang bisa dibanggakan oleh masyarakat Batam.</p>
            </div>
            <img src="/images/bg/bg-2.svg" alt="bg" class="absolute bottom-0 left-0 w-full opacity-80">
            <img src="/images/garnish-3.svg" alt="bg" class="absolute bottom-0 left-0 w-full">
        </div>

        <div class="py-8 bg-primary sm:pt-16">
            <h1 class="relative z-20 mb-8 text-2xl text-center text-white font-fraunces">Menuju Puncak Acara!</h1>
            <div class="relative z-20 flex items-center mx-auto mb-4 w-fit">
                <h2 class="text-[52px] text-white font-candlescript sm:text-7xl">D</h2>
                <div>
                    <h2 class="text-2xl leading-none text-secondary font-griffiths sm:text-4xl">Time</h2>
                    <h2 class="-mt-2 text-3xl leading-none text-white font-candlescript sm:text-5xl sm:-mt-4">own</h2>
                </div>
            </div>

            <div class="flex gap-2 *:w-1/4 mb-8 relative px-8 justify-center">
                <img src="/images/shadow-1.png" alt="shadow" class="absolute bottom-0 z-10 !w-screen opacity-90">
                <img src="/images/flower.svg" alt="shadow" class="absolute -bottom-8 !w-screen">
                <p class="p-4 relative z-20 text-sm text-center text-white rounded-xl bg-[#DDAC17]/30 font-fraunces">
                    <span id="days" class="block text-lg">00</span>
                    Day
                </p>
                <p class="p-4 relative z-20 text-sm text-center text-white rounded-xl bg-[#DDAC17]/30 font-fraunces">
                    <span id="hours" class="block text-lg">00</span>
                    Hour
                </p>
                <p class="p-4 relative z-20 text-sm text-center text-white rounded-xl bg-[#DDAC17]/30 font-fraunces">
                    <span id="minutes" class="block text-lg">00</span>
                    Minute
                </p>
                <p class="p-4 relative z-20 text-sm text-center text-white rounded-xl bg-[#DDAC17]/30">
                    <span id="seconds" class="block text-lg">00</span>
                    Second
                </p>
            </div>

            <div class="*:text-center mb-8">
                <p class="px-6 mb-2 text-base text-white font-poppins">Acara ini akan dilaksanakan pada 18 - 19
                    September 2024</p>
                <p class="mb-1 text-3xl text-white font-candlescript">Berlokasi di</p>
                <h2 class="font-montserrat text-[#DDAC17] font-extrabold text-3xl mb-8 sm:text-4xl">SMK NEGERI 7 BATAM
                </h2>
                <p class="px-6 text-base text-white font-poppins ">
                    Jangan lewatkan momen spesial ini! Saksikan penampilan memukau dari para siswa berprestasi yang siap
                    menginspirasi dan menghibur.
                </p>
            </div>

            <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NzRlcWZjYWxyZ3BubnE5Nmo3Z3VlcmVzbHIgYWxmcmVkb2FsZXhhbmRlcm1lbmRlejE2QG0&tmsrc=alfredoalexandermendez16%40gmail.com"
                target="_blank"
                class="block px-4 py-2 mx-auto font-bold text-white rounded-md w-fit font-montserrat bg-secondary hover:bg-secondary/80">
                Simpan ke Kalender
            </a>
        </div>

        <div class="relative min-h-screen pt-56 bg-primary max-w-[100vw] border-t-2 border-secondary overflow-hidden">
            <img src="/images/garnish-1.png" alt="hiasan" class="absolute top-0 w-full sm:max-h-40">

            <div class="flex flex-col items-center justify-center *:text-5xl mb-16 relative">
                <img src="/images/bercak.png" alt="bercak" class="absolute">
                <h1 class="relative z-10 mb-6 font-black text-center text-white uppercase font-poppins -rotate-6">
                    Rundown</h1>
                <h1 class="relative z-10 font-semibold text-center text-white font-poppins">Acara</h1>
            </div>

            <div class="px-4 sm:px-12">
                {{-- First --}}
                <div class="flex gap-3 step">
                    <div class="flex flex-col items-center w-3">
                        <h2
                            class="relative text-xl font-bold duration-700 opacity-0 text-secondary font-montserrat after:w-full after:h-full after:[content:''] after:bg-secondary after:blur-sm after:absolute after:top-0 after:left-0">
                            1</h2>
                        <div class="w-0.5 h-0 duration-1000 rounded-full bg-gradient-to-r from-secondary to-white line">
                        </div>
                    </div>
                    <div class="pb-8 duration-1000 translate-x-8 opacity-0">
                        <h2 class="mb-2 text-2xl font-medium text-secondary">Pembukaan</h2>
                        <p class="mb-3 text-lg font-medium text-white font-montserrat">Acara pembukaan akan disambut
                            dengan <span class="font-bold text-secondary">Tari Persembahan.</span></p>
                        <img src="/images/persembahan.jpg" alt="tari"
                            class="object-cover w-full h-40 rounded-xl max-w-80">
                    </div>
                </div>
                {{-- Second --}}
                <div class="flex gap-3 step">
                    <div class="flex flex-col items-center">
                        <h2
                            class="relative text-xl font-bold duration-700 opacity-0 text-secondary font-montserrat after:w-full after:h-full after:[content:''] after:bg-secondary after:blur-sm after:absolute after:top-0 after:left-0">
                            2</h2>
                        <div
                            class="w-0.5 h-0 duration-1000 rounded-full bg-gradient-to-r from-secondary to-white line">
                        </div>
                    </div>
                    <div class="pb-8 duration-1000 translate-x-8 opacity-0">
                        <h2 class="mb-2 text-2xl font-medium text-secondary">Salam sambutan</h2>
                        <p class="text-lg font-medium text-white font-montserrat">
                            Salam sambutan oleh kepala sekolah
                            <span class="font-bold text-secondary">SMK Negeri 7 Batam <span
                                    class="text-white">-</span>
                                NURSYA'BANI, M.Pd</span>
                        </p>
                        <hr class="my-1">
                        <p class="text-lg font-medium text-white font-montserrat">
                            Sambutan oleh ketua komite sekolah
                            <span class="font-bold text-secondary">SMK Negeri 7 Batam <span
                                    class="text-white">-</span> Tong Ju Siahaan</span>
                        </p>
                        <hr class="my-1">
                        <p class="text-lg font-medium text-white font-montserrat">
                            Sambutan oleh disdik Kepri -
                            <span class="font-bold text-secondary">Kepala Dinas</span>
                        </p>
                    </div>
                </div>
                {{-- Third --}}
                <div class="flex gap-3 step">
                    <div class="flex flex-col items-center">
                        <h2
                            class="relative text-xl font-bold duration-700 opacity-0 text-secondary font-montserrat after:w-full after:h-full after:[content:''] after:bg-secondary after:blur-sm after:absolute after:top-0 after:left-0">
                            3</h2>
                        <div
                            class="w-0.5 h-0 duration-1000 rounded-full bg-gradient-to-r from-secondary to-white line">
                        </div>
                    </div>
                    <div class="pb-8 duration-1000 translate-x-8 opacity-0">
                        <h2 class="relative mb-2 text-2xl font-medium text-secondary">
                            Cut The Cake!
                        </h2>
                        <p class="mb-3 text-lg font-medium text-white font-montserrat">
                            Pemotongan Tumpeng/Kue untuk
                            <span class="font-bold text-secondary">Ulang Tahun SMK Negeri 7 Batam yang ke-11!</span>
                        </p>
                    </div>
                </div>
                {{-- Fourth --}}
                <div class="flex gap-3 step">
                    <div class="flex flex-col items-center">
                        <h2
                            class="relative text-xl font-bold duration-700 opacity-0 text-secondary font-montserrat after:w-full after:h-full after:[content:''] after:bg-secondary after:blur-sm after:absolute after:top-0 after:left-0">
                            4</h2>
                        <div
                            class="w-0.5 h-0 duration-1000 rounded-full bg-gradient-to-r from-secondary to-white line">
                        </div>
                    </div>
                    <div class="pb-8 duration-1000 translate-x-8 opacity-0">
                        <h2 class="mb-2 text-2xl font-medium text-secondary">Perlombaan</h2>
                        <p class="mb-3 text-lg font-medium text-white font-montserrat">
                            Perlombaan yang dilakukan oleh para
                            <span class="font-bold text-secondary">Peserta</span>
                        </p>
                        <a href="#lomba"
                            class="text-lg text-white underline font-montserrat hover:text-secondary">Lihat daftar
                            lomba yang ada</a>
                    </div>
                </div>
                {{-- Fifth --}}
                <div class="flex gap-3 step">
                    <div class="flex flex-col items-center">
                        <h2
                            class="relative text-xl font-bold duration-700 opacity-0 text-secondary font-montserrat after:w-full after:h-full after:[content:''] after:bg-secondary after:blur-sm after:absolute after:top-0 after:left-0">
                            5</h2>
                        <div
                            class="w-0.5 h-0 duration-1000 rounded-full bg-gradient-to-r from-secondary to-white line">
                        </div>
                    </div>
                    <div class="pb-8 duration-1000 translate-x-8 opacity-0">
                        <h2 class="mb-2 text-2xl font-medium text-secondary">Penutupan</h2>
                        <p class="mb-3 text-lg font-medium text-white font-montserrat">
                            Penutupan acara
                            <span class="font-bold text-secondary">Kenduri SMK Negeri 7 Batam</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="lomba" class="py-10 border-t-2 border-t-secondary bg-primary">
            <h1 class="mb-8 text-2xl font-semibold text-center text-white font-montserrat">Daftar
                lomba
                Kenduri 7</h1>
            <div class="flex items-center justify-center gap-3 mb-3">
                <div class="w-1/4 h-0.5 bg-[linear-gradient(90deg,transparent,#F7C84A,transparent)]"></div>
                <h2 class="text-lg font-semibold text-center text-white font-montserrat">Keterangan Lomba</h2>
                <div class="w-1/4 h-0.5 bg-[linear-gradient(90deg,transparent,#F7C84A,transparent)]"></div>
            </div>

            <div x-data="{
                lomba1: 'Tari Kreasi',
                lomba2: 'Berbalas Pantun',
                lomba3: 'Langgam Melayu',
                lomba4: 'Melukis',
                lomba5: 'Hadroh',
                active: 1
            }" class="px-5">
                {{-- Navigator --}}
                <div class="flex w-full gap-2 mb-6 *:hover:cursor-pointer">
                    <div @click="active = 1" :class="active == 1 ? 'bg-secondary w-[40%]' : 'bg-[#003727] w-[20%]'"
                        class="flex flex-col items-center justify-center h-24 gap-1 px-2 text-white duration-700 rounded-xl hover:opacity-80">
                        <h3 class="text-3xl font-bold font-montserrat">01</h3>
                        <p x-text="lomba1" :class="active == 1 ? '' : 'hidden'" class="text-center"></p>
                    </div>
                    <div @click="active = 2" :class="active == 2 ? 'bg-secondary w-[40%]' : 'bg-[#003727] w-[20%]'"
                        class="flex flex-col items-center justify-center h-24 gap-1 px-2 text-white duration-700 rounded-xl hover:opacity-80">
                        <h3 class="text-3xl font-bold font-montserrat">02</h3>
                        <p x-text="lomba2" :class="active == 2 ? '' : 'hidden'" class="text-center"></p>
                    </div>
                    <div @click="active = 3" :class="active == 3 ? 'bg-secondary w-[40%]' : 'bg-[#003727] w-[20%]'"
                        class="flex flex-col items-center justify-center h-24 gap-1 px-2 text-white duration-700 rounded-xl hover:opacity-80">
                        <h3 class="text-3xl font-bold font-montserrat">03</h3>
                        <p x-text="lomba3" :class="active == 3 ? '' : 'hidden'" class="text-center"></p>
                    </div>
                    <div @click="active = 4" :class="active == 4 ? 'bg-secondary w-[40%]' : 'bg-[#003727] w-[20%]'"
                        class="flex flex-col items-center justify-center h-24 gap-1 px-2 text-white duration-700 rounded-xl hover:opacity-80">
                        <h3 class="text-3xl font-bold font-montserrat">04</h3>
                        <p x-text="lomba4" :class="active == 4 ? '' : 'hidden'" class="text-center"></p>
                    </div>
                    <div @click="active = 5" :class="active == 5 ? 'bg-secondary w-[40%]' : 'bg-[#003727] w-[20%]'"
                        class="flex flex-col items-center justify-center h-24 gap-1 px-2 text-white duration-700 rounded-xl hover:opacity-80">
                        <h3 class="text-3xl font-bold font-montserrat">05</h3>
                        <p x-text="lomba5" :class="active == 5 ? '' : 'hidden'" class="text-center"></p>
                    </div>
                </div>

                {{-- Content --}}
                {{-- 1 --}}
                <div x-show="active == 1" class="w-full" x-transition>
                    <h3 x-text="lomba1" class="text-2xl font-bold text-secondary font-montserrat"></h3>
                    <i class="text-white">Tingkat pelajar SMA/SMK</i>
                    <img src="/images/contest/tari.jpg" alt="tari" class="w-full my-3 rounded-xl aspect-video">
                </div>
                {{-- 2 --}}
                <div x-show="active == 2" class="w-full" x-transition>
                    <h3 x-text="lomba2" class="text-2xl font-bold text-secondary font-montserrat"></h3>
                    <i class="text-white">Tingkat pelajar SMA/SMK</i>
                    <img src="/images/contest/pantun.jpeg" alt="tari"
                        class="w-full my-3 rounded-xl aspect-video">
                </div>
                {{-- 3 --}}
                <div x-show="active == 3" class="w-full" x-transition>
                    <h3 x-text="lomba3" class="text-2xl font-bold text-secondary font-montserrat"></h3>
                    <i class="text-white">Tingkat pelajar SMA/SMK</i>
                    <img src="/images/contest/langgam.jpg" alt="tari"
                        class="w-full my-3 rounded-xl aspect-video">
                </div>
                {{-- 4 --}}
                <div x-show="active == 4" class="w-full" x-transition>
                    <h3 x-text="lomba4" class="text-2xl font-bold text-secondary font-montserrat"></h3>
                    <i class="text-white">Tingkat pelajar SMA/SMK</i>
                    <img src="/images/contest/lukis.webp" alt="tari" class="w-full my-3 rounded-xl aspect-video">
                </div>
                {{-- 5 --}}
                <div x-show="active == 5" class="w-full" x-transition>
                    <h3 x-text="lomba5" class="text-2xl font-bold text-secondary font-montserrat"></h3>
                    <i class="text-white">Tingkat pelajar SMA/SMK</i>
                    <img src="/images/contest/hadroh.jpg" alt="tari" class="w-full my-3 rounded-xl aspect-video">
                </div>
            </div>
        </div>

        <div class="bg-secondary">
            <div class="relative pt-12 pb-6 overflow-x-hidden -translate-y-8 bg-secondary rounded-t-3xl">
                <div class="*:uppercase *:px-8 *:font-stretch *:text-4xl sm:*:text-5xl mx-auto mb-8">
                    <h1>Dimeriah</h1>
                    <h1>Kan</h1>
                    <h1>OOleh *</h1>
                </div>

                <div class="*:font-grifter *:px-8 *:text-lg *:leading-none mb-12">
                    <p>Bazar Kewirausahaan</p>
                    <p>Pameran Job Tefa</p>
                    <p>Job Fair & Edu Fair SMK Negeri 7 Batam</p>
                </div>

                <div class="relative flex items-center justify-center overflow-hidden h-28">
                    <marquee
                        class="absolute w-[102vw] py-1 max-w-screen-sm font-bold uppercase font-stretch bg-black text-secondary rotate-6">
                        Bazar Kewirausahaan * Pameran Joob Tefa * Joob Fair & Edu Fair SMK Negeri 7 Batam</marquee>
                    <marquee
                        class="absolute w-[102vw] py-1 max-w-screen-sm font-bold uppercase font-stretch bg-black text-secondary opacity-20 -rotate-6">
                        Bazar Kewirausahaan * Pameran Joob Tefa * Joob Fair & Edu Fair SMK Negeri 7 Batam</marquee>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full px-4 py-10 bg-black h-fit">
            <div class="flex w-full *:w-1/2 justify-between mb-12 gap-4">
                <div>
                    <div class="flex flex-col w-full gap-2 mb-8 sm:flex-row">
                        <img src="/images/logo/skaju.png" alt="skaju" class="w-16">
                        <div class="flex *:w-1/3 sm:*:w-1/2">
                            <img src="/images/logo/bisa-hebat.png" alt="bisa hebat">
                            <img src="/images/logo/vokasi.png" alt="vokasi">
                        </div>
                    </div>
                    <div class="*:text-white mb-6">
                        <h3 class="font-bold font-grifter">Alamat</h3>
                        <p class="text-xs font-montserrat opacity-70">Komp. Koperasi Pemko, Batam centre, Belian,
                            Kec. Batam
                            Kota, Kota Batam, Kepulauan Riau</p>
                    </div>
                    <div class="*:text-white">
                        <h3 class="mb-2 font-bold font-grifter">Social Media</h3>
                        <div class="flex items-center w-full gap-4">
                            <a href="https://www.instagram.com/smkn7batam_official" target="_blank" class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="w-full fill-white opacity-60 max-h-8 group-hover:fill-[#E1306C] group-hover:opacity-100 duration-300">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/groups/smknegeri7batamkota" target="_blank"
                                class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                    class="w-full fill-white opacity-60 max-h-8 group-hover:fill-[#0000FF] group-hover:opacity-100 duration-300">
                                    <path
                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/@SMKNegeri7BatamOfficial" target="_blank"
                                class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    class="w-full fill-white opacity-60 max-h-8 group-hover:fill-[#FF0000] group-hover:opacity-100 duration-300">
                                    <path
                                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                                </svg>
                            </a>
                            <a href="https://www.tiktok.com/@smkn7.official" target="_blank" class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    class="w-full duration-300 fill-white opacity-60 max-h-8 group-hover:opacity-100">
                                    <path
                                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-end">
                    <div class="flex h-16 mb-8 *:w-8 justify-end gap-2">
                        <img src="/images/logo/rpl.png" alt="rpl">
                        <img src="/images/logo/mm.png" alt="mm">
                        <img src="/images/logo/tkj.png" alt="tkj">
                        <img src="/images/logo/tja.png" alt="tja">
                        <img src="/images/logo/titl.png" alt="titl">
                    </div>
                    <div class="*:text-white *:text-end mb-6">
                        <h3 class="font-bold font-grifter">Contact & Email</h3>
                        <p class="text-xs opacity-70">07784805790</p>
                        <p class="text-xs opacity-70">smknegeri7batam@gmail.com</p>
                    </div>
                    <div class="text-white *:text-end">
                        <h3 class="font-bold font-grifter">Website Resmi</h3>
                        <a href="https://smknegeri7batam.sch.id/"
                            class="text-xs hover:underline opacity-70">https://smknegeri7batam.sch.id/</a>
                    </div>
                </div>
            </div>

            <h6 class="text-xs text-center text-white font-montserrat">© 2024 SMK Negeri 7 Batam, All Rights
                Reserved
            </h6>
        </div>
    </div>
    </div>

    <audio id="audioPlayer" loop autoplay>
        <source src="/audio/backsound.mp3" type="audio/mpeg">
    </audio>

    <button id="muteButton" class="fixed z-30 p-2 bottom-4 left-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" id="unmute" class="fill-white size-6">
            <path
                d="M533.6 32.5C598.5 85.2 640 165.8 640 256s-41.5 170.7-106.4 223.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C557.5 398.2 592 331.2 592 256s-34.5-142.2-88.7-186.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM473.1 107c43.2 35.2 70.9 88.9 70.9 149s-27.7 113.8-70.9 149c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C475.3 341.3 496 301.1 496 256s-20.7-85.3-53.2-111.8c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zm-60.5 74.5C434.1 199.1 448 225.9 448 256s-13.9 56.9-35.4 74.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C393.1 284.4 400 271 400 256s-6.9-28.4-17.7-37.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM301.1 34.8C312.6 40 320 51.4 320 64l0 384c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352 64 352c-35.3 0-64-28.7-64-64l0-64c0-35.3 28.7-64 64-64l67.8 0L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" id="mute"
            class="hidden fill-white size-6">
            <path
                d="M301.1 34.8C312.6 40 320 51.4 320 64l0 384c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352 64 352c-35.3 0-64-28.7-64-64l0-64c0-35.3 28.7-64 64-64l67.8 0L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3zM425 167l55 55 55-55c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-55 55 55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-55-55-55 55c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l55-55-55-55c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
        </svg>
    </button>

    <script src="/js/rundown_animation.js"></script>
    <script src="/js/backsound.js"></script>

    <script>
        let date = @json($date);
        let month = @json($month);
        let year = @json($year);
        let hour = @json($hour);
        let minute = @json($minute);

        // Set the date we're counting down to
        let countDownDate = new Date(`${year}-${month}-${date}T${hour}:${minute}`).getTime();

        // Update the count down every 1 second
        let x = setInterval(function() {
            // Get today's date and time
            let now = new Date().getTime();

            // Find the distance between now and the count down date
            let distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</x-app-layout>
