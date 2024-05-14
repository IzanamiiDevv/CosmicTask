function addContainer(name, bgcolor, txtcolor){
    const temp = `
    <div class="card" style="background: ${bgcolor};width: calc(65vh / 1.5);height: 65vh;padding: 3px;position: relative;border-radius: 6px;font-size: 1.5em;cursor: pointer;z-index: -10;color:${txtcolor};">
    <h2>${name}</h2>
    </div>
    `
    document.getElementById('root').innerHTML += temp;
}

export { addContainer };