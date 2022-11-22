

// $camelCase = ['name','gender','age','email',
// 'favoriteColor','isHavePet','education','favoriteRestaurant'];

const obj1 = [];
obj1[0] = {
    name : "Monica",
    gender : "Female",
    age : 17,
    email : "monica@dingdong.com",
    favoriteColor : ["Yellow, Pink, White, Purple"],
    isHavePet : "Yes",
    education : [
        {
            name : "SD 01", 
            City : "Jakarta", 
            Graduate : 2016,
        },

        {
            name : "SMP 02", 
            City : "Jakarta", 
            Graduate : 2019,
        },

        {
            name : "SMA 03", 
            City : "Tangerang", 
        },
        
    ],
    favoriteRestaurant : ["Bento", "Sushi", "Pancake", "Eggy", "Tempura", "Bento", "Eggy", "Padang", "Tteok", "Sushi", "Sushi"],
};

obj1[1] = {
    name : "Wendy",
    gender : "Male",
    age : 23,
    email : "wendy@dingdong.com",
    favoriteColor : ["Blue, Black, Grey"], 
    isHavePet : "No",
    education : [
        {
            name : "SD 02", 
            City : "Jakarta", 
            Graduate : 2010,
        },

        {
            name : "SMP 03", 
            City : "Bogor", 
            Graduate : 2013,
        },

        {
            name : "SMA 01", 
            City : "Surabaya", 
            Graduate : 2016,
        },

        {
            name : "Universitas Maju", 
            City : "Tangerang", 
        },
        
    ],
    favoriteRestaurant : ["Tempura", "Bento", "Sushi", "Pancake", "Padang", "Katsu", "Geprek", "Pancake", "Eggy"],
};

console.log("Nama : " + obj1[1].name);
console.log("SMA : " + obj1[1].education[2].name);
console.log("Kota : " + obj1[1].education[2].City);
console.log("Makanan Favorite : " + obj1[1].favoriteRestaurant[5]);