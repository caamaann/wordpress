function cek(id, err, num) {
    var target = document.getElementById(id),
        err = document.getElementById(err),
        letters = /^[A-Za-z]+$|^$/,
        numbers = /^\d+$|^$/,
        email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$|^$/;

    var hari = document.getElementById('day').value,
        bulan = document.getElementById('month').value,
        tahun = document.getElementById('year').value,
        showUmur = document.getElementById("umur");

    if (num == 30) {
        if (target.value.length > 30 || !target.value.match(letters)) {
            err.style.color = "red";
        } else {
            err.style.color = "white";
        }
    }

    if (num == 10 || num == 6) {
        temp = num;
        if (target.value.length > temp || !target.value.match(numbers)) {
            err.style.color = "red";
        } else {
            err.style.color = "white";
        }

    }

    if (num == 'email') {
        if (!target.value.match(email)) {
            err.innerHTML = "Invalid Email"
            err.style.color = "red"
        } else {
            err.innerHTML = ""
        }
    }

    if (hari == "-1" || bulan == "-1" || tahun == "-1") {
        umur.innerHTML = "Usia: ... Tahun";
    } else {
        var today = new Date();
        var year = 0, age;
        if (today.getMonth() < (bulan - 1)) {
            year = 1;
        } else if ((today.getMonth() == (bulan - 1)) && today.getDate() < hari) {
            year = 1;
        }

        age = today.getFullYear() - tahun - year;

        if (age < 0) {
            age = 0;
        }

        showUmur.innerHTML = "Usia: " + age + " Tahun";
    }
}

function disableForm() {
    var other = document.getElementById("otherHobby"),
        boxOther = document.getElementById("other"),
        att = document.createAttribute("onclick");
    
    att.value = "enableForm()";
    boxOther.setAttributeNode(att);
    other.disabled = true;
}

function enableForm() {
    var other = document.getElementById("otherHobby"),
        boxOther = document.getElementById("other"),
        att = document.createAttribute("onclick");

    att.value = "disableForm()";
    boxOther.setAttributeNode(att);
    other.disabled = false;
}
