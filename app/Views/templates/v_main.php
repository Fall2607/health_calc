<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="intro-section" id="home-section" style="background-color: #ccc;">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1 class="mb-3">Buatlah tubuh anda menjadi lebih baik dari sekarang</h1>
                <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores nisi minus perspiciatis optio, id deserunt.</p>
                <p class="text-center">
                    <a href="#programs-section" class="btn btn-outline-white py-3 px-5">Get Started</a>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="site-section" id="calculator-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8 section-heading">
                <span class="subheading">Stay Healthy</span>
                <h2 class="heading mb-3">Know Your Body</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, mollitia amet nihil!
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a data-toggle="modal" data-target="#modalDailyCalorie">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-fit"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Daily Calorie Calculator</h2>
                            <p>Menghitung kebutuhan kalori harian berdasarkan tinggi, berat badan, dan tinggi badan</p>
                        </div>
                    </div>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="modalDailyCalorie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Daily Calorie Calculator</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" id="usia1" placeholder="Age (Yours)" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="berat1" placeholder="Weight (Kg)" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="tinggi1" placeholder="Height (cm)" class="form-control">
                                    </div>
                                    <label>Gender :</label>
                                    <div class="row ml-2 mr-2 mb-3">
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender1" id="male1" value="male" checked>
                                                <label class="form-check-label" for="male1">
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender1" id="female1" value="female">
                                                <label class="form-check-label" for="female1">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" value="hitung1" onclick="getValue(event)" class="btn btn-primary">Calculate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a data-toggle="modal" data-target="#modalHeart">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-gym-1"></span>
                        <div class="ftco-feature-1-text">
                            <h2>Calorie Burned By Heart/Rate</h2>
                            <p>Membakar lebih banyak kalori menjadi lebih mudah dengan pengetahuan yang lebih baik tentang hubungan antara detak jantung dan metabolisme.</p>
                        </div>
                    </div>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="modalHeart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Calorie Burned By Heart/Rate</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" id="detak_1" placeholder="jumlah detak jantung (ketika aktivitas) " class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="detak_2" placeholder="jumlah detak jantung (ketika istirahat) " class="form-control">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" value="hitung2" onclick="getValue(event)" class="btn btn-primary">Calculate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a data-toggle="modal" data-target="#modalBodyMass">
                    <div class="ftco-feature-1">
                        <span class="icon flaticon-vegetables"></span>
                        <div class="ftco-feature-1-text">
                            <h2>BMI Body Mass Calculator</h2>
                            <p>BMI adalah ukuran lemak tubuh berdasarkan tinggi dan berat badan yang berlaku untuk pria dan wanita dewasa.</p>
                        </div>
                    </div>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="modalBodyMass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">BMI Body Mass Calculator</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" id="berat3" placeholder="Weight (Kg)" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="tinggi3" placeholder="Height (cm)" class="form-control">
                                    </div>
                                    <label>Gender :</label>
                                    <div class="row ml-2 mr-2 mb-3">
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender3" id="male3" value="male" checked>
                                                <label class="form-check-label" for="male3">
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender3" id="female3" value="female">
                                                <label class="form-check-label" for="female3">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" value="hitung3" onclick="getValue(event)" class="btn btn-primary">Calculate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script>
            function getValue(event){
                var tombol = event.target;
                var isi = tombol.value;
                
                //ambil variable daily calorie calculator
                var usia1 = parseInt(document.getElementById('usia1').value);
                var berat1 = parseInt(document.getElementById('berat1').value);
                var tinggi1 = parseInt(document.getElementById('tinggi1').value);
                var gender1 = document.querySelector('input[name="gender1"]:checked').value;
                
                var usia2 = parseInt(document.getElementById('usia2').value);
                var berat2 = parseInt(document.getElementById('berat2').value);
                var gender2 = document.querySelector('input[name="gender2"]:checked').value;
                var rates2 = parseInt(document.getElementById('rates2').value);
                var durasi2 = parseInt(document.getElementById('durasi2').value);

                //ambil variable daily calorie calculator
                var berat3 = parseInt(document.getElementById('berat3').value);
                var tinggi3 = parseInt(document.getElementById('tinggi3').value);
                var gender3 = document.querySelector('input[name="gender3"]:checked').value;
                
                var hitung;
                if(isi === 'hitung1'){
                    hitung = new mathDailyCalorie(usia1, berat1, tinggi1, gender1)
                }else if(isi === 'hitung2'){    
                    hitung = new mathCalorieBurned(usia2,berat2, gender2, rates2, durasi2)
                }else if(isi === 'hitung3'){
                    hitung = new mathBMI(berat3, tinggi3, gender3)
                }else{
                    console.log("Invalid"); 
                }
                
                hitung.proses();
            }

            class Hitung{
                constructor(){
                    this.nama = 'Utama';
                }

                proses(){
                    return 0;
                }
            }

            class mathDailyCalorie extends Hitung{
                constructor(usia1 ,berat1, tinggi1, gender1){
                    super();
                    this.nama = 'Daily Calorie Calculator';
                    this.usia1 = usia1;
                    this.berat1 = berat1;
                    this.tinggi1 = tinggi1;
                    this.gender1 = gender1;
                }

                proses(){
                    var cond, bmr, info;
                    if(this.gender1 === 'male'){
                        bmr = 66+(13.75*this.berat1)+(5*this.tinggi1)-(6.75*this.usia1);
                        info = 'BMR=66+(13.75 x ' + this.berat1 + 'Kg)+(5 x ' + this.tinggi1 + 'cm)-(6.75 x ' + this.usia1 + 'thn) <br> Nilai BMR anda : "' + bmr + '"';
                    }else if(this.gender1 === 'female'){
                        bmr = 655+(9.56*this.berat1)+(1.85*this.tinggi1)-(4.68*this.usia1)
                        info = 'BMR=665+(9.56 x ' + this.berat1 + 'Kg)+(1.85 x ' + this.tinggi1 + 'cm)-(4.68 x ' + this.usia1 + 'thn) <br> Nilai BMR anda : "' + bmr + '"'
                    }
                    Swal.fire({
                        icon : 'success',
                        title: this.nama,
                        html: info,
                        footer: 'Fyber~'
                        })    
                }
            }

            class mathCalorieBurned extends Hitung{
                constructor(usia2, berat2, gender2, rates2, durasi2 ){
                    super();
                    this.nama = 'Calorie Burned By Heart/Rate';
                    this.usia2 = usia2;
                    this.berat2 = berat2;
                    this.gender2 = gender2;
                    this.rates2 = rates2;
                    this.durasi2 = durasi2;
                }

                proses(){
                    if(this.gender2 === 'male'){
                        Swal.fire({
                        icon : 'success',
                        title: this.nama,
                        html: 'dd',
                        footer: 'asd'
                        })
                    }else if(this.gender2 === 'female'){
                        Swal.fire({
                        icon : 'error',
                        title: this.nama,
                        html: 'asd',
                        footer: 'dd'
                        })
                    }
                }
            }

            class mathBMI extends Hitung{
                constructor(berat3, tinggi3, gender3){
                    super();
                    this.nama = 'BMI Body Mass Calculator';
                    this.berat3 = berat3;
                    this.tinggi3 = tinggi3;
                    this.gender3 = gender3;
                    this.calc = this.berat3/((this.tinggi3/100)**2);
                    this.info = 'null';
                }

                proses(){
                var con;
                if(this.calc < 18.5 ){
                    this.info = 'Kategori Berat Badan Kurang';
                    con = 'info';
                }else if(this.calc >= 18.5 && this.calc < 24 && this.gender3 === 'female'){
                    this.info = 'Kategori Berat Badan Normal';
                    con = 'success';
                }else if(this.calc >= 24 && this.calc < 30 && this.gender3 === 'female'){
                    this.info = 'Kategori Berat Badan Berlebih';
                    con = 'warning';
                }else if(this.calc >= 18.5 && this.calc < 25){
                    this.info = 'Kategori Berat Badan Normal';
                    con = 'success';
                }else if(this.calc >= 25 && this.calc < 30){
                    this.info = 'Kategori Berat Badan Berlebih';
                    con = 'warning';
                }else if(this.calc >= 30){
                    this.info = 'Kategori Berat Badan Obesitas';
                    con = 'error';
                }

                Swal.fire({
                icon : con,
                title: this.nama,
                html: 'BMI = ' + this.berat3 + ' / ' + '((' + this.tinggi3 + '/100)^2'+ '<br>' +'Nilai BMI anda : "' + this.calc + '"',
                footer: '<b>' + this.info + '</b>'
                })
            }
            }

        </script> -->

    </div>
</div>

<div class="bgimg" style="background-image: url('<?= base_url('images/') ?>/bg_2.jpg');" data-stellar-background-ratio="0.5">

    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h2 class="">Get The Result You Want</h2>
                <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ut quisquam, distinctio illo, debitis repudiandae.</p>
            </div>
        </div>
    </div>

</div>

<div class="site-section" id="programs-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <span class="subheading">Programs</span>
                <h2 class="heading mb-3">Beginners Program</h2>
                <p>Memiliki bentuk tubuh yang ideal dengan menjaga berat badan dan membantuk otot anda dalam program pemula</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                        <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">

                        <h2><a href="single.html">Weight Loss</a></h2>
                        <span>By Justin Daniel</span>,
                        <span>30 minutes</span>
                    </div>
                </div>

                <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                        <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">

                        <h2><a href="single.html">Weekly workout</a></h2>
                        <span>By Justin Daniel</span>,
                        <span>30 minutes</span>
                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                        <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">

                        <h2><a href="single.html">Focused Muscle</a></h2>
                        <span>By Justin Daniel</span>,
                        <span>30 minutes</span>
                    </div>
                </div>

                <div class="class-item d-flex align-items-center">
                    <a href="single.html" class="class-item-thumbnail">
                        <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                    </a>
                    <div class="class-item-text">

                        <h2><a href="single.html">Conditioning Full-Body</a></h2>
                        <span>By Justin Daniel</span>,
                        <span>30 minutes</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bgimg" style="background-image: url('<?= base_url('images/') ?>/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h2 class="">Every Step Counts</h2>
                <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ipsam tempore, sapiente modi facilis est?</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section" id="schedule-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <span class="subheading">Fitness Sched</span>
                <h2 class="heading mb-3">Schedule</h2>
                <p>Atur Jadwal Anda Bersama Kami</p>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <ul class="nav days d-flex" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="sunday-tab" data-toggle="tab" href="#nav-sunday" role="tab" aria-controls="sunday" aria-selected="true">S</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="monday-tab" data-toggle="tab" href="#nav-monday" role="tab" aria-controls="monday" aria-selected="false">M</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#nav-tuesday" role="tab" aria-controls="tuesday" aria-selected="false">T</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#nav-wednesday" role="tab" aria-controls="wednesday" aria-selected="false">W</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#nav-thursday" role="tab" aria-controls="thursday" aria-selected="false">T</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="friday-tab" data-toggle="tab" href="#nav-friday" role="tab" aria-controls="friday" aria-selected="false">F</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="saturday-tab" data-toggle="tab" href="#nav-saturday" role="tab" aria-controls="saturday" aria-selected="false">S</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="nav-sunday" role="tabpanel" aria-labelledby="nav-sunday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Sunday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-monday" role="tabpanel" aria-labelledby="nav-monday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Monday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-tuesday" role="tabpanel" aria-labelledby="nav-tuesday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Tuesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-wednesday" role="tabpanel" aria-labelledby="nav-wednesday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Wednesday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-thursday" role="tabpanel" aria-labelledby="nav-thursday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Thursday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-friday" role="tabpanel" aria-labelledby="nav-friday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Friday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-saturday" role="tabpanel" aria-labelledby="nav-saturday-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>




                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_3.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #3</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #1</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_2.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #2</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>



                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_4.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #4</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <a href="single.html" class="class-item-thumbnail">
                                <img src="<?= base_url('images/') ?>/img_1.jpg" alt="Image">
                            </a>
                            <div class="class-item-text">
                                <span>Saturday 7:30am - 9:00am</span>
                                <h2><a href="single.html">Fitness Class Name #5</a></h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="bgimg" style="background-image: url('<?= base_url('images/') ?>/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
                <h2 class="">Your Fitness Partner Where Ever You Are</h2>
                <p class="lead mx-auto desc mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, nisi cum officia alias recusandae neque reprehenderit.</p>
            </div>
        </div>
    </div>
</div>




<div class="site-section" id="teams-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
            <div class="col-md-8  section-heading">
                <span class="subheading">Developer</span>
                <h2 class="heading mb-3">Our Team</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                    texts.
                    Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                <div class="person">
                    <img src="<?= base_url('images/') ?>/person_1.jpg" alt="Image" class="img-fluid">
                    <h3>Adit Oktopryadin</h3>
                    <p class="position">Amateur Trainer</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="person">
                    <img src="<?= base_url('images/') ?>/person_3.jpg" alt="Image" class="img-fluid">
                    <h3>Abdul Hadi Achmad</h3>
                    <p class="position">Professional Trainer</p>
                    <p>Kami bantu anda mulai dari niat</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="person">
                    <img src="<?= base_url('images/') ?>/person_4.jpg" alt="Image" class="img-fluid">
                    <h3>Naufal Habib Hakim</h3>
                    <p class="position">Intermediete Trainer</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                        texts.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>