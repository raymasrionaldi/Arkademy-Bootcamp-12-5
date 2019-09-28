function json(){
  var biodata = {
    name : "Raymas Rionaldi",
    age : 23,
    adress : "Jln. Margonda Raya No. 21 Gang Lengkeng RT.03 RW.01, Kel. Pondok Cina, Kec. Beji, Kota Depok, Jawa Barat, Indonesia, 16424",
    hobbies : ["Lofi Hip-hop Music", "RPG Games", "Swimming", "Soccer", "Reading", "Coding", "Anime & Manga"],
    is_married : false,
    list_school : [
      {
        name : "SD Negeri 05 V Koto Kampung Dalam",
        year_in : 2001,
        year_out : 2007,
        major : null,
      },
      {
        name : "SMP Negeri 1 V Koto Kampung Dalam",
        year_in : 2007,
        year_out : 2010,
        major : null,
      },
      {
        name : "SMA Negeri 1 V Koto Kampung Dalam",
        year_in : 2010,
        year_out : 2013,
        major : "Science",
      },
      {
        name : "Universitas Andalas",
        year_in : 2013,
        year_out : 2019,
        major : "Computer System"
      }
    ],

    skills : [
      {
        name : "HTML",
        level : "Advanced",
      },
      {
        name : "CSS",
        level : "Advanced"
      },
      {
        name : "JavaScript",
        level : "Advanced",
      },
      {
        name : "PHP",
        level : "Advanced",
      }
    ],
    interest_in_coding : true,
  };
  var jsonString = JSON.stringify(biodata);
  console.log(jsonString);
}

json();
