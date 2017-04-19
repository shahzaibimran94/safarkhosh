app.controller('HomeController', function($scope,$http,$window, API_URL,$location,$localStorage) {
	
	$scope.records = 5;
    $scope.capacity = 0;
    //fetch data of all tours from Search Controller index function
	//
    if($location.absUrl().includes('http://localhost:8080/safarkhoshb/search')){
    $http.get(API_URL + "tour")
    .success(function(response){
        $scope.tours = response;
        $localStorage.tourData = response; 

        var url1=$location.absUrl();
        var data1=url1.lastIndexOf('/');
        var result1=url1.substring(data1);
        var result2=result1.substring(1);
        $scope.search = result2;

        var url=$location.absUrl();
        var data=url.lastIndexOf('/');
        var result=url.substring(data);
        var result=result.substring(2);

        if(result.length<=30 && result!=undefined && result!="earch"){

            var temp = $scope.tours;
            $scope.tours = [] 

            for(var i=0;i<temp.length;i++){
                var str = temp[i].title;
                if(str.includes(result)){
                    if(temp[i].date_to_go >= $localStorage.dFrom && temp[i].date_to_go <= $localStorage.dTo){
                        $scope.tours.push(temp[i]);
                    }
                }
            }
            if($scope.tours.length==0){
                if(!(url.includes('TO')) && !(url.includes('Biker'))){
            $http.get(API_URL+"recent")
            .success(function(response){
                    $localStorage.notatrip = true; 
                    $scope.notrip = $localStorage.notatrip;
                    $scope.trip = response;
                });
                }     
            }
        }
        if($location.absUrl().includes('TO')){
            var temp = $localStorage.tourData;
            $scope.tours = [] 
            for(var i=0;i<temp.length;i++){
                var str = temp[i].type;
                if(str.includes('TO')){    
                    $scope.tours.push(temp[i]);
                }
            }
        }
        if($location.absUrl().includes('Biker')){
            var temp = $localStorage.tourData;
            $scope.tours = [] 
            for(var i=0;i<temp.length;i++){
                var str = temp[i].type;
                if(str.includes('Biker') || str.includes('biker')){    
                    $scope.tours.push(temp[i]);
                }
            }
        }
    });
    };

    //fetch data of tours from Search Controller search function that is searched
    $scope.show = function() {
        if($scope.query==undefined || $scope.from==undefined){
            alert("Fill All the Field Below.");
        }else{
            $localStorage.dFrom=$scope.from;
            $localStorage.dTo=$scope.to;
            $window.location.href="search/"+$scope.query; 
        }
    }

    $scope.busTrips = function(){
        $window.location.href="search/TO";
    };

    $scope.biking = function(){
        $window.location.href="search/Biker";
    };

    $scope.explore = function(){
        $window.location.href="search";
    };

    $scope.rate = function(id){
        $localStorage.currentTripId = id;
    };

    $scope.filter = function(search){
     var temp = $scope.tours;
     $scope.tours = [] 
     for(var i=0;i<temp.length;i++){
        var str = temp[i].title;
        var nsearch = search.substring(2);
        var n = str.includes(nsearch);
        if(n){
            $scope.tours.push(temp[i]);
        }
    } 
}

$scope.filterService = function(){   
        var temp = $scope.tours;
        $scope.tours = [] 
        for(var i=0;i<temp.length;i++){
            var str = temp[i].service;
            var service = $scope.service;
            var n = str.includes(service);
            if(n){
                $scope.tours.push(temp[i]);
            }
        }
}

    //fetch data from tours according to capacity
    $scope.filterCapacity = function(){
        var temp = $scope.tours;
        $scope.tours = [] 
        if($scope.capacity){

            for(var i=0;i<temp.length;i++){
        //console.log($scope.tours[i].quantity);
        if(temp[i].rquantity>=$scope.capacity){
            $scope.tours.push(temp[i]);
        }
    }
}
}

$scope.filterDate = function(){
    if($scope.date.from < $scope.date.to){
        var temp = $scope.tours;
        $scope.tours = [] 
        for(var i=0;i<temp.length;i++){
            if(temp[i].date_to_go > $scope.date.from && temp[i].date_to_return < $scope.date.to){
                $scope.tours.push(temp[i]);
            }
        }
    }else{
        alert('Date From is less than Return Date.');
    }
}

    //filter tours according to price range
    $scope.filterRange = function(){
    	if ($scope.range.min < $scope.range.max){
    		if($scope.tours.length!=undefined) {

               var temp = $scope.tours;
               $scope.tours = []

               for(var i=0;i<temp.length;i++){

                 if(temp[i].cost_per_person >= $scope.range.min && temp[i].cost_per_person <= $scope.range.max){

                    $scope.tours.push(temp[i])
                }else{

                }
            }

        }

    }
}

    //reset search page
    $scope.reset = function(){
    	$http.get(API_URL + "tour")
        .success(function(response){
            $scope.tours = response;
            $scope.notrip = false;
            $scope.capacity = "";
            $scope.range = "";
            $scope.range.max = "";
            $scope.date.from =null;
            $scope.date.to=null;
            $scope.service="";
            $scope.search="";
        });
    };

    //display services in activity dropdown box
    $scope.initService =function(){
        $http.get(API_URL + "service")
        .success(function(response){
            $scope.services = response;
    //console.log(response);
});
    }

    $scope.detail = function(id){
        $window.location.href = "http://localhost:8080/safarkhoshb/trip/"+id;  
    }
    //this function push data from database to the next rows of data already displayed in search page 
    $scope.loadMore = function () {
       $scope.records+=3
   }
});

app.controller('loginController',function($scope,$http,API_URL,$localStorage,$window){


    //console.log($localStorage)
    if($localStorage.loggedIn === true) {
        $scope.loggedIn = true;
        $scope.dp = $localStorage.dbusername;
        //$scope.dp = $localStorage.name;
    } else {
        $scope.loggedIn = false;
    }
    
    $scope.login = function(){
     $http.get(API_URL +$scope.username+"/"+$scope.password)
     .success(function(response){ 
        var data = response;
        if(data.length==0){
            $scope.error="Username or password is Wrong";  
        }else{
            $scope.error=null;
            $localStorage.message = data;
            $localStorage.id = $localStorage.message[0].id;
            $localStorage.name = $localStorage.message[0].name;
            $localStorage.dbusername = $localStorage.message[0].username;
            $scope.usersName = $localStorage.name;
            $localStorage.loggedIn = true;
            $('#myModal').modal('hide');
            $window.location.reload();
        }
    });
};

$scope.signup = function(){

    if($scope.name==undefined || $scope.email==undefined || $scope.username==undefined || $scope.password==undefined){
        $scope.signupError="Fill complete form";
        return $scope.signupError;
    }
    if($scope.password.length<6){
        $scope.passwordError="Password length should be greater than 6";
        return $scope.passwordError;
    }else{
        $scope.signupError==null;
        $http.get(API_URL +$scope.name+"/"+$scope.email+"/"+$scope.username+"/"+$scope.password)
        .success(function(response){
            //console.log(message);
            $localStorage.dbusername = response;
            /*$localStorage.message = response;
            $localStorage.id = $localStorage.message[0].id;
            $localStorage.name = $localStorage.message[0].name;
            $scope.usersName = $localStorage.name;*/
            $localStorage.loggedIn = true;
            $('#signupModal').modal('hide');
            $window.location.reload();

        });
    }
};

$scope.userDetail = function(){
    $http.get(API_URL+"user/"+$localStorage.dbusername)
    .success(function(response){
        $scope.user = response;
        //$localStorage.un = $scope.user.name;
       // console.log($scope.user)
   });
};

$scope.update = function(id){

    if($scope.newPassword.length>=6){
        $scope.newPasswordError = "";
        $http.get(API_URL+"update/"+id+"/"+$scope.newName+"/"+$scope.newPassword)
        .success(function(response){
            $window.location.reload();
        });
    }else{
        $scope.newPasswordError = "Password length should be greater than 6";
    }
};

$scope.logout = function(){
    $localStorage.$reset();
    $window.location.reload();
};

$scope.rateTrip = function(){
        var id = $localStorage.currentTripId;
        $scope.avRating = [parseInt($scope.security) + parseInt($scope.value) + parseInt($scope.staff) + parseInt($scope.facilities) + parseInt($scope.fun)]/5;
        var se = $scope.security,
            v = $scope.value,
            st = $scope.staff,
            fa = $scope.facilities,
            f = $scope.fun;
        $http.get(API_URL+"rate/"+id+"/"+se+"/"+v+"/"+st+"/"+fa+"/"+f)
        .success(function(response){
            alert(response)
            $('#ratingModal').modal('hide');
        });
    };

});

/*app.controller('signupController',function($scope,$http,API_URL,$localStorage,$window){

    if($localStorage.loggedIn === true) {
        $scope.loggedIn = true;
        $scope.dp = $localStorage.name;
    } else {
        $scope.loggedIn = false;
     }
 });*/

 app.controller('detailController',function($scope,$http,API_URL,$localStorage,$window,$location){

    var url=$location.absUrl();
    var data=url.lastIndexOf('/');
    var id=url.substring(data);
    var id=id.substring(1);

    $http.get(API_URL+"trip/"+id)
    .success(function(response){
        var trip = response;

        $scope.id= trip[0].id;
        $scope.title = trip[0].title;
        $scope.operator = trip[0].operator;
        $scope.cost = trip[0].cost_per_person;
        $scope.capacity = trip[0].quantity;
        $scope.rcapacity = trip[0].rquantity;
        $scope.description = trip[0].description;
        $scope.sp = trip[0].startPoint;
        $scope.ep = trip[0].endPoint;
        
        var itenary = [
                        {day : trip[0].day1 , ID : 1},
                        {day : trip[0].day2 , ID : 2},
                        {day : trip[0].day3 , ID : 3},
                        {day : trip[0].day4 , ID : 4},
                        {day : trip[0].day5 , ID : 5},
                        {day : trip[0].day6 , ID : 6},
                        {day : trip[0].day7 , ID : 7},
                        {day : trip[0].day8 , ID : 8},
                        {day : trip[0].day9 , ID : 9},
                        {day : trip[0].day10 , ID : 10}
                        ];
        for(var i = 0; i < itenary.length; i++) {
            var obj = itenary[i];

            if(obj.day == null) {
                itenary.splice(i);
            }
        }
        $scope.itenary = itenary;
        $scope.questions($scope.id);
        var imageString = trip[0].image;
        if(imageString.includes(',')){
            $scope.showImage = false;
            var remove = imageString.replace(/,/g ," ");
            $scope.images = remove.split(" ");
        }else{
            $scope.showImage = true;
            $scope.image = trip[0].image;
        }
    });
    

    $scope.book = function(id){
        $window.location.href = "http://localhost:8080/safarkhoshb/book/"+id;
    };

    $scope.questions = function(id){
        $http.get(API_URL+"find/questions/"+id)
        .success(function(response){
            $scope.question = response;
            });
    };
    
    $scope.operatorEmail = function(operator){
        $http.get(API_URL+"op/"+operator)
        .success(function(response){
            $localStorage.opEmail = response;
        });
    };

    $scope.comment = function(){
        if($localStorage.loggedIn === true){
            $scope.submitComment = function(id,operator,comment){
                /*$http.get(API_URL+"comment/"+comment+"/"+$localStorage.name)*/
                $scope.operatorEmail(operator);
                $http.get(API_URL+"comment/"+id+"/"+$localStorage.opEmail.email+"/"+comment+"/"+$localStorage.name+"/"+$localStorage.message[0].email)
                .success(function(response){
                    if(response=="Comment Submitted"){
                        alert('Comment Submitted');
                        $window.location.reload();
                    }else{
                        alert('Comment not Submitted');
                    }
                });
            };
        }else{
           alert('To comment Login First');   
        }
    };

});

 app.controller('orderController',function($scope,$http,API_URL,$localStorage,$window,$filter,$location){

    $scope.quantity = 0;
    $scope.extra = {"1":1,"2":1,"3":1,"4":1,"5":1,"6":1,"7":1,"8":1,"9":1,"10":1};
    var url=$location.absUrl();
    var data=url.lastIndexOf('/');
    var id=url.substring(data);
    var id=id.substring(1);
    
    if(id=='link2'){
        var nurl=$location.absUrl();
        var removelink2=nurl.replace(/#\/link2/g,'');
        var ndata=removelink2.lastIndexOf('/');
        var nid=removelink2.substring(ndata);
        var nid=nid.substring(1);   

        $http.get(API_URL+"trip/"+nid)
       .success(function(response){
            var trip = response;        
            $scope.trips =response;        
            $scope.id= trip[0].id;
            $scope.title = trip[0].title;
            $scope.operator = trip[0].operator;
            $scope.cost = trip[0].cost_per_person;
            $scope.capacity = trip[0].quantity;
            $scope.rcapacity = trip[0].rquantity;
            $scope.description = trip[0].description;        
        });
    }else{

        $http.get(API_URL+"trip/"+id)
        .success(function(response){
            var trip = response;        
            $scope.trips =response;        
            $scope.id= trip[0].id;
            $scope.title = trip[0].title;
            $scope.operator = trip[0].operator;
            $scope.cost = trip[0].cost_per_person;
            $scope.capacity = trip[0].quantity;
            $scope.rcapacity = trip[0].rquantity;
            $scope.description = trip[0].description;
        });
    }

    $scope.quantityChanged = function(){
        var data = []
        $scope.extra = {"1":1,"2":1,"3":1,"4":1,"5":1,"6":1,"7":1,"8":1,"9":1,"10":1};
        $scope.form = []
        for(var i=0; i<$scope.quantity; i++) {
            data[i] = { "ID": i+1 };
            $scope.form.push(data[i])
        }
    };

    $scope.submit = function(){

        var message = ""
        for(var i=0;i<$scope.quantity;i++){
            if(!$scope.form[i].personEmail.includes('@')){
                message += $scope.form[i].personEmail + " ";
            }
        }
        if(message){
            $scope.message = message+"not an Email";
        }else{
            $scope.message = "";
        }
        $scope.triptitle = $scope.trips[0].title.substring(8);
        $scope.cost = $scope.trips[0].cost_per_person;
        $scope.amount = ($scope.cost * $scope.quantity)+(1500 * $scope.quantity);
        $scope.total = $scope.amount + 10000;
        $scope.clientName = $localStorage.name;
        var genInvoice = $scope.generateInvoice();
        var date = $filter('date')(new Date(), 'MMddyy');
        var invoice = genInvoice.concat(date);
        $localStorage.invoiceId = invoice;
        $scope.yourInvoice = invoice;
        $localStorage.ordersData = $scope.form; 
    }

    $scope.order = function(){

        if($localStorage.loggedIn === true){

            var title = $scope.trips[0].title;
            var tourid = $scope.trips[0].id;
            var id = $localStorage.id;
            $scope.yourInvoice = $localStorage.invoiceId;
            var invoice = $scope.yourInvoice;
            var remaining = $scope.trips[0].rquantity;   
            if(remaining>=$scope.quantity){
                for(var i=0;i<$scope.quantity;i++){

                    if($localStorage.ordersData[i].fullName!=undefined || $localStorage.ordersData[i].personEmail!=undefined){

                        var name = $localStorage.ordersData[i].fullName;
                        var cnic = $localStorage.ordersData[i].cnic;
                        var contact = $localStorage.ordersData[i].contact;
                        var email = $localStorage.ordersData[i].personEmail;
                        var extras = $localStorage.ordersData[i].extra;

                        $http.get(API_URL+"order/"+name+"/"+cnic+"/"+contact+"/"+email+"/"+title+"/"+$scope.trips[0].operator+"/"+$scope.quantity+"/"+$scope.trips[0].type+"/"+$scope.total+"/"+id+"/"+tourid+"/"+invoice)
                        .success(function(response){
                        });
                    }else{
                        alert("fill complete form");
                    }
                    if(i==$scope.quantity-1){ 
                        alert("Order Successful & Your Invoice is "+invoice)
                    }
                }
            }else{
                alert('No capacity');
            }

        }else{
            alert('Please Login or Signup');
        } 
    };


    $scope.generateInvoice = function(){
        var length = 4,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
        retVal = "";
        for (var i = 0, n = charset.length; i < length; ++i){
            retVal += charset.charAt(Math.floor(Math.random() * n));
        }
        return retVal;
    }

});

/*app.controller('userController',function($scope,$http,API_URL,$localStorage,$window,$filter,$location){

});*/

/*app.controller('widgetController',function($scope,$http,API_URL,$localStorage,$window,$filter,$location){

    $scope.busTrips = function(){
        $window.location.href = "search";
    };

});*/