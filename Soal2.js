//sample variable
        var p_username = "a.dfghja";
        var p_email = "ALEXalex90!@gmail.com";
        var temp_usermail;
        var temp_domain;

        function is_username_valid(username){
            //Bagian Username
            if(username.length == 8){
                if(/^[a-z]+$/.test(username) || /([.])+/.test(username)){ //pake regex ga apa apa kan ? q(≧▽≦q)
                    return true;
                }else{
                    alert("Username anda tidak memenuhi syarat");
                    return false;
                }
            }else{
                alert("Karakter harus memiliki panjang 8 !");
                return false;
            }
        }

        function is_email_valid(email){
            //Bagian Email
            temp_usermail = email.substring(0, email.indexOf("@"));
            temp_domain = email.substring(temp_usermail.length + 1);
            if(temp_usermail.length >= 4 && /([a-z])/.test(temp_usermail)){
                if(/([A-Z])/.test(temp_usermail)){
                    if(/([0-9])/.test(temp_usermail)){
                        if(/([$%^&*()_+|~=`!{}\[\]:";'<>?,.\/])/.test(temp_usermail)){
                            if(/([.])/.test(temp_domain)){
                                var temp_domain2 = email.substring(temp_usermail.length , email.indexOf("."));
                                if(/([a-z])/.test(email.substring(temp_usermail.length + temp_domain2.length + 1))){
                                    return true;
                                }else{
                                    alert("Domain tidak ada !");
                                    return false;
                                }
                            }else{
                                alert("Upps anda tertinggal titik sebelum domain");
                                return false;
                            }
                        }else{
                            alert("Harus ada simbol");
                            return false;
                        }
                    }else{
                        alert("Harus ada angka");
                        return false;
                    }
                }else{
                    alert("Harus ada huruf besar");
                    return false;
                }
            }else{
                alert("nama pengguna tidak memenuhi syarat !");
                return false;
            }
        }
        if(is_username_valid(p_username)){
            alert("Username memenuhi syarat");
        }
        if(is_email_valid(p_email)){
            alert("Email anda memenuhi syarat");
        }