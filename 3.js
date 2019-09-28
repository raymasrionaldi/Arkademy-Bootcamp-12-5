function Number(data){
    if (data == ""){
        return "No number found in parameter!";
    }else{
        return data.split("").sort().join();
    }
}


function sortNumber(data){
  var result = Number(data.replace(/\D/g, ""));
  console.log("Output: " + result.replace(/,/g,""));
}

sortNumber("48172a94");
sortNumber("abc");
sortNumber("94a");
