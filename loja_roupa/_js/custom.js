 const subtipos = {
    "Camiseta Oversized": [
        "Estampa Graffiti",
        "Estampa Anime",
        "Estampa Abstrata"
    ],
    "Camiseta Tie-Dye": [
        "Colorida",
        "Pastel",
        "Neon"
    ],
    "Camiseta Streetwear": [
        "Skate",
        "Hip Hop",
        "Urban Art"
    ],
    "Camiseta Geek": [
        "Satoru Gojo",
        "Sukuna",
        "Naruto",
        "Marvel",
        "Star Wars"
    ],
    "Camiseta Cropped": [
        "Liso",
        "Estampado",
        "Com frase"
    ],
    "Camiseta Vintage": [
        "Bandas",
        "Retro",
        "Anos 80"
    ],
    "Camiseta Minimalista": [
        "Liso",
        "Com frase pequena",
        "Logo discreto"
    ]
};

const subtipos2 = {
    "Calça Jeans": [
        "Rasgada",
        "Clássica",
        "Destroyed",
        "Cintura Alta"
    ],
    "Calça Jogger": [
        "Com Elástico",
        "Estampada",
        "Liso"
    ],
    "Calça Cargo": [
        "Com Bolsos",
        "Militar",
        "Street"
    ],
    "Calça Moletom": [
        "Liso",
        "Com Estampa",
        "Com Zíper"
    ],
    "Calça Skinny": [
        "Preta",
        "Azul",
        "Colorida"
    ],
    "Calça Wide Leg": [
        "Cintura Alta",
        "Com Fenda",
        "Estampada"
    ],
    "Calça Sarja": [
        "Bege",
        "Preta",
        "Colorida"
    ]
};

const subtiposCalcado = {
    "Tênis": [
        "Casual",
        "Esportivo",
        "Chunky",
        "Skate"
    ],
    "Bota": [
        "Cano Curto",
        "Cano Longo",
        "Tratorada"
    ],
    "Sandália": [
        "Rasteira",
        "Plataforma",
        "Slide"
    ],
    "Chinelo": [
        "Slide",
        "Tradicional",
        "Estampado"
    ],
    "Sapatênis": [
        "Casual",
        "Social"
    ],
    "Coturno": [
        "Preto",
        "Marrom",
        "Tratorado"
    ]
};

const subtiposShort = {
    "Short Jeans": [
        "Destroyed",
        "Cintura Alta",
        "Clássico"
    ],
    "Short Moletom": [
        "Liso",
        "Estampado",
        "Com bolso"
    ],
    "Short Esportivo": [
        "Corrida",
        "Bermuda",
        "Fitness"
    ],
    "Short Cargo": [
        "Com Bolsos",
        "Militar",
        "Street"
    ],
    "Short Praia": [
        "Estampado",
        "Liso",
        "Com cordão"
    ],
    "Short Cintura Alta": [
        "Jeans",
        "Moletom",
        "Estampado"
    ]
};


function mostrarSubtipo() {
    const tipo = document.getElementById('descricao').value;
    const subtipoSelect = document.getElementById('subtipo');
    subtipoSelect.innerHTML = '<option value="">Selecione o subtipo</option>';
    if (subtipos[tipo]) {
        subtipos[tipo].forEach(function(st) {
            const opt = document.createElement('option');
            opt.value = st;
            opt.textContent = st;
            subtipoSelect.appendChild(opt);
        });
        subtipoSelect.style.display = '';
    } else {
        subtipoSelect.style.display = 'none';
    }
}

function mostrarSubtipoCalca() {
    const tipo = document.getElementById('descricaoCalca').value;
    const subtipoSelect = document.getElementById('subtipoCalca');
    subtipoSelect.innerHTML = '<option value="">Selecione o subtipo</option>';
    if (subtipos2[tipo]) {
        subtipos2[tipo].forEach(function(st) {
            const opt = document.createElement('option');
            opt.value = st;
            opt.textContent = st;
            subtipoSelect.appendChild(opt);
        });
        subtipoSelect.style.display = '';
    } else {
        subtipoSelect.style.display = 'none';
    }
}

function mostrarSubtipoCalcado() {
    const tipo = document.getElementById('descricaoCalcado').value;
    const subtipoSelect = document.getElementById('subtipoCalcado');
    subtipoSelect.innerHTML = '<option value="">Selecione o subtipo</option>';
    if (subtiposCalcado[tipo]) {
        subtiposCalcado[tipo].forEach(function(st) {
            const opt = document.createElement('option');
            opt.value = st;
            opt.textContent = st;
            subtipoSelect.appendChild(opt);
        });
        subtipoSelect.style.display = '';
    } else {
        subtipoSelect.style.display = 'none';
    }
}



function mostrarSubtipoShort() {
    const tipo = document.getElementById('descricaoShort').value;
    const subtipoSelect = document.getElementById('subtipoShort');
    subtipoSelect.innerHTML = '<option value="">Selecione o subtipo</option>';
    if (subtiposShort[tipo]) {
        subtiposShort[tipo].forEach(function(st) {
            const opt = document.createElement('option');
            opt.value = st;
            opt.textContent = st;
            subtipoSelect.appendChild(opt);
        });
        subtipoSelect.style.display = '';
    } else {
        subtipoSelect.style.display = 'none';
    }
}


// Preços fixos para cada subtipo
const precosSubtipos = {
    // Camisetas
    "Estampa Graffiti": 59.90,
    "Estampa Anime": 69.90,
    "Estampa Abstrata": 54.90,
    "Colorida": 49.90,
    "Pastel": 52.90,
    "Neon": 55.90,
    "Skate": 64.90,
    "Hip Hop": 62.90,
    "Urban Art": 60.90,
    "Satoru Gojo": 79.90,
    "Sukuna": 79.90,
    "Naruto": 74.90,
    "Marvel": 84.90,
    "Star Wars": 84.90,
    "Liso": 39.90,
    "Estampado": 44.90,
    "Com frase": 42.90,
    "Bandas": 69.90,
    "Retro": 59.90,
    "Anos 80": 65.90,
    "Com frase pequena": 41.90,
    "Logo discreto": 43.90,

    // Calças
    "Rasgada": 99.90,
    "Clássica": 89.90,
    "Destroyed": 109.90,
    "Cintura Alta": 119.90,
    "Com Elástico": 79.90,
    "Estampada": 84.90,
    "Militar": 94.90,
    "Street": 89.90,
    "Com Bolsos": 89.90,
    "Liso": 79.90,
    "Com Estampa": 84.90,
    "Com Zíper": 89.90,
    "Preta": 89.90,
    "Azul": 89.90,
    "Colorida": 94.90,
    "Com Fenda": 99.90,
    "Bege": 89.90,

    // Calçados
    "Casual": 129.90,
    "Esportivo": 149.90,
    "Chunky": 159.90,
    "Skate": 139.90,
    "Cano Curto": 179.90,
    "Cano Longo": 199.90,
    "Tratorada": 189.90,
    "Rasteira": 69.90,
    "Plataforma": 89.90,
    "Slide": 59.90,
    "Tradicional": 49.90,
    "Estampado": 54.90,
    "Social": 149.90,
    "Preto": 179.90,
    "Marrom": 179.90,

    // Shorts
    "Destroyed": 59.90,
    "Clássico": 49.90,
    "Com bolso": 54.90,
    "Corrida": 44.90,
    "Bermuda": 49.90,
    "Fitness": 52.90,
    "Militar": 59.90,
    "Street": 54.90,
    "Com cordão": 49.90,
    "Jeans": 59.90,
    "Moletom": 54.90
};

// Atualiza preço do input ao selecionar subtipo
function atualizarPrecoPorSubtipo(selectId, precoId) {
    const select = document.getElementById(selectId);
    const precoInput = document.getElementById(precoId);
    select.addEventListener('change', function() {
        const subtipo = select.value;
        if (precosSubtipos[subtipo]) {
            precoInput.value = precosSubtipos[subtipo].toFixed(2);
        } else {
            precoInput.value = "0.00";
        }
        atualizarPrecoTotal();
    });
}

// Chame para cada par de select/input
atualizarPrecoPorSubtipo('subtipo', 'precoCamiseta');
atualizarPrecoPorSubtipo('subtipo', 'precoCalca');
atualizarPrecoPorSubtipo('subtipoCalcado', 'precoCalcado');
atualizarPrecoPorSubtipo('subtipoShort', 'precoShort');

// Permite edição manual, mas sempre atualiza o total
camposPreco.forEach(id => {
    document.getElementById(id).addEventListener('input', atualizarPrecoTotal);
})

// ...existing code...



// ...existing code...