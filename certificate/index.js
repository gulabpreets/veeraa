const generatePDF = async (name)=>{
    const {PDFDocument, rgb} = PDFLib;

    const exBytes = await fetch("./certificate.pdf").then(res => res.arrayBuffer());
    const pdfdocs = await PDFDocument.load(exBytes);
    
    const exFont = await fetch("./PatrickHand-Regular.ttf").then(res => res.arrayBuffer());
    pdfdocs.registerFontkit(fontkit);    
    const myFont = await pdfdocs.embedFont(exFont);

    const pages = pdfdocs.getPages();
    const firstPg = pages[0];

//    var nam_len = name.length;

//    function x_dir(){
//     if(nam_len == 0) return 400;
//     else if(nam_len==1) return 399;
//     else if(nam_len==2) return 398;
//     else if(nam_len==3) return 397;
//     else if(nam_len==4) return 396;
//     else if(nam_len==6) return 395;
//     else if(nam_len==7) return 394;
//     else if(nam_len==8) return 393;
//     else if(nam_len==9) return 392;
//     else if(nam_len==10) return 391;
//     else if(nam_len==11) return 390;
//     else if(nam_len==12) return 389;
//     else if(nam_len==13) return 388;
//     else if(nam_len==14) return 387;
//     else if(nam_len==15) return 386;
//     else if(nam_len==16) return 385;
//     else if(nam_len==19) return 384;
//     else if(nam_len==20) return 386;
//     else if(nam_len==21) return 383;
//     else if(nam_len==22) return 382;//
//     else if(nam_len==23) return 381;
//     else if(nam_len==24) return 379;
//     else if(nam_len==25) return 378;
//     else if(nam_len==26) return 377;
//     else if(nam_len==27) return 376;
//     else
//     return 370;

//    }

//  var xx = x_dir();?
//  console.log();

    firstPg.drawText(name,{
        x:520,  // ->
        y:300,  //  ^
        size: 25,
        font: myFont
    })
    
    const uri = await pdfdocs.saveAsBase64({dataUri:true}); 
    saveAs(uri,name, { autoBom : true });
    document.getElementById("certificates").src=uri;
}

document.getElementById("submit").addEventListener("click",()=>{
        var name = document.getElementById("name").value;
        generatePDF(name);    
})

