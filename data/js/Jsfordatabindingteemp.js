/* JavaScript Document Develope Shambhuraje Desai Sr.Deveroper*/
	/*-------------- Required Parameter ---------------*/
		// 1. get one hidden fild for store arrray data. this control id is #storeArrayvalue
		// 2. get one main check in table title . this control id is #titlechk
		// 3. tbody name id is #tdata 
		
function loding(main,obj) {
   
    if (obj.Hiddendata != "") {				
        var oldvalue = obj.Hiddendata;
        Frarr = oldvalue.split(',');
        var truecount = 0;
         j('#'+ obj.tbodyname +" "+':checkbox').each(function() {															 
            var Franchiseeid = j(this).attr('id');
            var index = Frarr.indexOf(Franchiseeid);
            if (index !== -1) {
                j(this).prop('checked', true);
                truecount++;
            }
        });
		var originealcount1 =j('#'+ obj.tbodyname +" "+":checkbox").length;
       
        if (truecount == originealcount1)
            j('#'+obj.titlecheck).prop('checked', true);
    }
return obj.Hiddendata;
}

function titlechkclick1(main,obj) {
	var returnvalu ="";
    var check = document.getElementById(obj.titlecheck).checked;
    if (check == true) {
        j('#'+ obj.tbodyname +" "+":checkbox").prop('checked', true);
        j('#'+ obj.tbodyname +" "+':checkbox').each(function() {
            var Franchiseeid = j(this).attr('id');
            var index = Frarr.indexOf(Franchiseeid);
            if (index !== -1) {
                Frarr[index] = Franchiseeid;
            } else {
                Frarr.push(Franchiseeid);
            }
        });
        var NewDate1 = Frarr;
        returnvalu = NewDate1;
    } else {
        j('#'+ obj.tbodyname +" "+":checkbox").prop('checked', false);
        j('#'+ obj.tbodyname +" "+':checkbox').each(function() {
            var Franchiseeid = j(this).attr('id');
            var index = Frarr.indexOf(Franchiseeid);	
            if (index !== -1) {
                Frarr.splice(index, 1);
            }
        });
        var NewDate1 = Frarr;
		returnvalu = NewDate1;
    }
	return returnvalu;
}

function eachcheck1(main,obj) {	
	var returnvalu ="";
    var check = j(obj.eachtitle).prop('checked');	
    if (check == true) {
        var Franchiseeid = j(obj.eachtitle).attr('id');
        var index = Frarr.indexOf(Franchiseeid);
        if (index !== -1) {
            Frarr[index] = Franchiseeid;
        } else {
            Frarr.push(Franchiseeid);
        }
        var NewDate1 = Frarr;
		returnvalu = NewDate1;       		
		 var originealcount =j('#'+ obj.tbodyname +" "+":checkbox").length;		
		 var newcount =j('#'+ obj.tbodyname +" "+"[type='checkbox']:checked").length;			
		 if(originealcount == newcount)
		 j('#'+ obj.titlecheck).prop('checked', true);
		 
    } else {
        var Franchiseeid = j(obj.eachtitle).attr('id');
        var index = Frarr.indexOf(Franchiseeid);
        if (index !== -1) {
            Frarr.splice(index, 1);
        }
        var NewDate1 = Frarr;      
		returnvalu = NewDate1;
		  j('#'+ obj.titlecheck ).prop('checked', false);
    }
		return returnvalu;
}

function clickpoup(main,obj) {
    if (obj.Status == "All") {

        j("#titlechk").prop('checked', true);
        titlechkclick();
    } else if (obj.Status == "AllNone") {
        j("#titlechk").prop('checked', false);
        titlechkclick();
        Frarr = [];
        j("#storeArrayvalue").val("");
    } else {
        j('#'+ obj.titlecheck).prop('checked', false);
        titlechkclick1(main,obj);
    }



}



function SDeachcheck (str)
{	
	var c = {};
    var str = j.extend(c, str);
	if(str.clickstatus == 'subtitle')
		return eachcheck1(j(this),str);
	else if(str.clickstatus == 'loding')
		return loding(j(this),str);
	else if(str.clickstatus == 'title')	
		return titlechkclick1(j(this),str);
	else if(str.clickstatus == 'AllNone')	
		return clickpoup(j(this),str);
		
};