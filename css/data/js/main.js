const search=document.getElementById('search');
const matchlist=document.getElementById('match-list');

const searchcity=async searchtext=>{
    const res= await fetch('../data/city.json');
    const city=await res.json();
    console.log(city)
    let matches=city.filter(city=>{
    const regex=new RegExp(`^${searchtext}`,'gi') ; 
    return city.name.match(regex) || city.abbr.match(regex);
    });
    if(searchtext.length===0){
        matches=[];
    }
    // console.log(matches)
    outputdisp(matches);
}
const outputdisp=matches=>{
    if(matches.length>0){
       const html=matches.map(match=>{
        `<div class="card card-body mb-1">
        <h4>${match.name}(${match.abbr}) <span class="text-primary">${match.capital}</span></h4>
        <small>Lat:${match.lat}/Long:${match.long}</small>
        </div>`
       });
       matchlist.innerHTML=html;
    }
}

search.addEventListener('input',()=>searchcity(search.value));
