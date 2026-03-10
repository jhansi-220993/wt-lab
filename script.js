// Variables..
const siteName = "Cyber Security Awareness";
let reportCount = 0;

// Function declaration
function showMessage() {
    alert("Stay alert! Cyber safety is important.");
}

// Function expression
var getRiskScore = function(level) {
    return level;
};

// Arrow function
const calculateRisk = () => {
    let score = getRiskScore(3);
    alert("Risk Score: " + score);
};

// Object
let securityOfficer = {
    name: "Officer Ravi",
    role: "Cyber Analyst",
    status: "Available",

    updateStatus: function() {
        this.status = "Busy";
        return this.name + " is now " + this.status;
    }
};

// Object method triggered by event
function changeStatus() {
    document.getElementById("officerInfo").innerHTML =
        securityOfficer.updateStatus();
}

// Pop-up boxes
function showAlertBox() {
    alert("Cyber alert issued!");
}

function confirmAction() {
    let choice = confirm("Do you want to enable protection?");
    document.getElementById("userAction").innerHTML =
        choice ? "User enabled protection" : "User canceled protection";
}

function askName() {
    let userName = prompt("Enter your name:");
    document.getElementById("userAction").innerHTML =
        "Reported by: " + userName;
}
