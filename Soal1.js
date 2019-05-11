var obj = {};
var CNama = "Ahmad Naufal G";
var Cschool = {
    SMK : "SMKN 1 Cianjur",
};
var CAddess = "BTN Bumi Emas Blok E3 No 16";
var CHobbies = ["Pray", "Code", "Eat"]
var CisMarried = false
var CSkills = new Array(
    {
        PHP : "Moderate",
        JavaScript : "Moderate",
    },
    {
        Csharp : "Expert",
        C : "Moderate",
        Java : "Begineer"
    }
);
function JsWorks(){
    obj.Nama = CNama;
    obj.Address = CAddess;
    obj.Hobbies = CHobbies;
    obj.is_married = CisMarried;
    obj.school = Cschool;
    obj.skills = CSkills;
    return JSON.stringify(obj, '');
}
console.log(JsWorks());