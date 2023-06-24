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
    var condition;
    if(this.calc < 18.5 ){
        this.info = 'Kategori Berat Badan Kurang';
        condition = 'info';
    }else if(this.calc >= 18.5 && this.calc < 24 && this.gender3 === 'female'){
        this.info = 'Kategori Berat Badan Normal';
        condition = 'success';
    }else if(this.calc >= 24 && this.calc < 30 && this.gender3 === 'female'){
        this.info = 'Kategori Berat Badan Berlebih';
        condition = 'warning';
    }else if(this.calc >= 18.5 && this.calc < 25){
        this.info = 'Kategori Berat Badan Normal';
        condition = 'success';
    }else if(this.calc >= 25 && this.calc < 30){
        this.info = 'Kategori Berat Badan Berlebih';
        condition = 'warning';
    }else if(this.calc >= 30){
        this.info = 'Kategori Berat Badan Obesitas';
        condition = 'error';
    }

    Swal.fire({
    icon : condition,
    title: this.nama,
    html: 'BMI = ' + this.berat3 + ' / ' + '((' + this.tinggi3 + '/100)^2'+ '<br>' +'Nilai BMI anda : "' + this.calc + '"',
    footer: '<b>' + this.info + '</b>'
    })
}
}