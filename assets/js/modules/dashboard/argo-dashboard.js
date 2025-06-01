export function argoDashboard() {
  const path = "templates/dashboard/argo-dashboard.php";

  $("#argo-dashboard-content").load(path, function () {
    loadCharts();
  });
}

function loadCharts() {
  const ctx = document.getElementById("accomplishmentsChart").getContext("2d");

  // Example dynamic data - replace with real fetch/logic
  const totalAccomplishments = [20, 18, 25, 30, 28, 24];
  const workingDays = 22;

  // Calculate accomplishments per working day with 2 decimals
  const accomplishmentsPerDay = totalAccomplishments.map(
    (total) => +(total / workingDays).toFixed(2)
  );

  const accomplishmentsChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: ["January", "February", "March", "April", "May", "June"],
      datasets: [
        {
          label: "Accomplishments per Working Day",
          data: accomplishmentsPerDay,
          backgroundColor: "rgba(54, 162, 235, 0.2)",
          borderColor: "rgba(54, 162, 235, 1)",
          borderWidth: 3,
          fill: true,
          tension: 0.4,
          pointBackgroundColor: "rgba(54, 162, 235, 1)",
          pointRadius: 6,
          pointHoverRadius: 8,
          hoverBorderWidth: 3,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: "Accomplishments per Working Day",
          },
          ticks: {
            stepSize: 0.2,
          },
          grid: {
            borderDash: [5, 5],
            color: "#d1d9e6",
          },
        },
        x: {
          title: {
            display: true,
            text: "Month",
          },
          grid: {
            display: false,
          },
        },
      },
      plugins: {
        legend: {
          labels: {
            font: {
              size: 14,
              weight: "600",
            },
            color: "#33475b",
          },
        },
        tooltip: {
          backgroundColor: "#33475b",
          titleFont: {
            size: 16,
            weight: "700",
          },
          bodyFont: {
            size: 14,
          },
          padding: 12,
          cornerRadius: 6,
          displayColors: false,
          callbacks: {
            label: (context) => context.parsed.y + " accomplishments/day",
          },
        },
      },
    },
  });

  return accomplishmentsChart;
}
