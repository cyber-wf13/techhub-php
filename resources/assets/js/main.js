import { Dropdown, Collapse, Alert } from "bootstrap";

function alertClearByTime() {
    const TIME = 3000;
    const alertList = document.querySelectorAll(".alert");
    if (alertList.length === 0) {
        return;
    }
    const alerts = [].slice.call(alertList).map(function (element) {
        return new Alert(element);
    });

    setTimeout(() => {
        alerts.forEach((alert) => {
            alert.close();
        });
    }, TIME);
}

alertClearByTime();
