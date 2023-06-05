import './bootstrap';
import './Choices';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Exemple de données pour le graphique
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ,'Janvier', 'Février', 'Mars', 'Avril', 'Mai'],
        datasets: [{
            label: 'Chiffre d\'affaires mensuel en euros',
            data: [8201, 7029, 9175, 7593, 8698, 8321, 8449, 7326, 9063, 7842, 8237, 9847],
            backgroundColor: [
                '#1e40af',
            ],
            hoverOffset: 4
        }]
    },
    options: {
       
        responsive: true,
        maintainAspectRatio: false
    }
});




var ctx = document.getElementById('myChartt').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre' ,'Janvier', 'Février', 'Mars', 'Avril', 'Mai'],
        datasets: [{
            label: 'Nombre d\'utilisateurs',
            data: [250, 320, 420, 340, 380, 400, 500, 580, 700, 780, 850, 1000],
            borderColor: '#1E40AF',
            backgroundColor: '#fff',
            borderWidth: 3,
            pointBackgroundColor: '#1E40AF',
            pointBorderColor: '#fff',
            pointBorderWidth: 2,
            pointRadius: 5,
            pointHoverRadius: 7,
            tension: 0.4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 200
                }
            }
        }
    }
});
