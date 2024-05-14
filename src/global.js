function addContainer(name, bgcolor, txtcolor){
    const temp = `
    <div class="card" style="background: ${bgcolor};color:${txtcolor};">
    <h2>${name}</h2>
    </div>
    `
    document.getElementById('root').innerHTML += temp;
}

export { addContainer };