function addContainer(name, bgcolor, txtcolor){
    const temp = `
    <div class="card" style="background: ${bgcolor};color:${txtcolor};">
        <a href="#popup2">Hello</a>
    </div>
    `;
    document.getElementById('root').innerHTML += temp;
}

export { addContainer };