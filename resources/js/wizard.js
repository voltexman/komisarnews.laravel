import './dropzone';

class Steps {
    constructor(wizard) {
        this.wizard = wizard;
        this.steps = this.getSteps();
        this.stepsQuantity = this.getStepsQuantity();
        this.currentStep = 0;
    }

    setCurrentStep(currentStep) {
        this.currentStep = currentStep;
    }

    getSteps() {
        return this.wizard.getElementsByClassName('step');
    }

    getStepsQuantity() {
        return this.getSteps().length;
    }

    handleConcludeStep() {
        this.steps[this.currentStep].classList.add('-completed');
    }

    handleStepsClasses(movement) {
        if (movement > 0)
            this.steps[this.currentStep - 1].classList.add('-completed');
        else if (movement < 0)
            this.steps[this.currentStep].classList.remove('-completed');
    }
}

class Panels {
    constructor(wizard) {
        this.wizard = wizard;
        // this.panelWidth = this.wizard.offsetWidth;
        this.panelsContainer = this.getPanelsContainer();
        this.panels = this.getPanels();
        this.currentStep = 0;

        this.updatePanelsPosition(this.currentStep);
        // this.updatePanelsContainerHeight();
    }

    // getCurrentPanelHeight() {
    // return `${this.getPanels()[this.currentStep].offsetHeight}px`;
    // }

    getPanelsContainer() {
        return this.wizard.querySelector('.panels');
    }

    getPanels() {
        return this.wizard.getElementsByClassName('panel');
    }

    // updatePanelsContainerHeight() {
    // this.panelsContainer.style.height = this.getCurrentPanelHeight();
    // }

    updatePanelsPosition(currentStep) {
        const panels = this.panels;
        const panelWidth = this.panelWidth;

        for (let i = 0; i < panels.length; i++) {
            panels[i].classList.remove(
                'movingIn',
                'movingOutBackward',
                'movingOutFoward'
            );

            if (i !== currentStep) {
                if (i < currentStep) panels[i].classList.add('movingOutBackward');
                else if (i > currentStep) panels[i].classList.add('movingOutFoward');
            } else {
                panels[i].classList.add('movingIn');
            }
        }

        // this.updatePanelsContainerHeight();
    }

    setCurrentStep(currentStep) {
        this.currentStep = currentStep;
        this.updatePanelsPosition(currentStep);
    }
}

class Wizard {
    constructor(obj) {
        this.wizard = obj;
        this.panels = new Panels(this.wizard);
        this.steps = new Steps(this.wizard);
        this.stepsQuantity = this.steps.getStepsQuantity();
        this.currentStep = this.steps.currentStep;

        this.concludeControlMoveStepMethod = this.steps.handleConcludeStep.bind(this.steps);
        this.wizardConclusionMethod = this.handleWizardConclusion.bind(this);
    }

    updateButtonsStatus() {
        if (this.currentStep === 1)
            this.nextControl.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>До опису<i class="bi bi-arrow-right-short ms-2"></i>';

        if (this.currentStep === 2)
            this.nextControl.innerHTML = '<i class="bi bi-file-text-fill me-2"></i>Підтвердження<i class="bi bi-arrow-right-short ms-2"></i>';

        if (this.currentStep === 0)
            this.previousControl.classList.add('d-none');
        else
            this.previousControl.classList.remove('d-none');
    }

    updtadeCurrentStep(movement) {
        this.currentStep += movement;
        this.steps.setCurrentStep(this.currentStep);
        this.panels.setCurrentStep(this.currentStep);

        this.handleNextStepButton();
        this.updateButtonsStatus();

        const animateActiveIconClass = ['d-block', 'animate__animated', 'animate__tada', 'animate__infinite']
        const stepIcons = document.querySelectorAll('p.step__number > i')

        for (let i = 0; i < stepIcons.length; i++) {
            stepIcons[i].classList.remove(...animateActiveIconClass)
            stepIcons[this.currentStep].classList.add(...animateActiveIconClass)
        }
    }

    handleNextStepButton() {
        if (this.currentStep === this.stepsQuantity - 1) {
            this.nextControl.innerHTML = '<i class="bi bi-send-fill me-2"></i>Відправити заявку';

            this.nextControl.removeEventListener('click', this.nextControlMoveStepMethod);
            this.nextControl.addEventListener('click', this.concludeControlMoveStepMethod);
            this.nextControl.addEventListener('click', this.wizardConclusionMethod);
        } else {
            this.nextControl.innerHTML = '<i class="bi bi-camera-fill me-2"></i>До фото<i class="bi bi-arrow-right-short ms-2"></i>';

            this.nextControl.addEventListener('click', this.nextControlMoveStepMethod);
            this.nextControl.removeEventListener('click', this.concludeControlMoveStepMethod);
            this.nextControl.removeEventListener('click', this.wizardConclusionMethod);
        }
    }

    handleWizardConclusion() {
        this.wizard.classList.add('completed');
    };

    addControls(previousControl, nextControl) {
        this.previousControl = previousControl;
        this.nextControl = nextControl;
        this.previousControlMoveStepMethod = this.moveStep.bind(this, -1);
        this.nextControlMoveStepMethod = this.moveStep.bind(this, 1);

        previousControl.addEventListener('click', this.previousControlMoveStepMethod);
        nextControl.addEventListener('click', this.nextControlMoveStepMethod);

        this.updateButtonsStatus();
    }

    moveStep(movement) {
        if (this.validateMovement(movement)) {
            this.updtadeCurrentStep(movement);
            this.steps.handleStepsClasses(movement);
        } else {
            throw ('This was an invalid movement');
        }
    }

    validateMovement(movement) {
        const fowardMov = movement > 0 && this.currentStep < this.stepsQuantity - 1;
        const backMov = movement < 0 && this.currentStep > 0;

        return fowardMov || backMov;
    }
}

let wizardElement = document.getElementById('wizard');
let wizard = new Wizard(wizardElement);
let buttonNext = document.querySelector('.next');
let buttonPrevious = document.querySelector('.previous');

wizard.addControls(buttonPrevious, buttonNext);






















// class Wizard {
//     constructor(wizardElement) {
//         this.wizard = wizardElement;
//         this.panels = Array.from(this.wizard.querySelectorAll('.panels .panel'));
//         this.steps = Array.from(this.wizard.querySelectorAll('.steps .step'));
//         this.currentStep = 0;
//         this.stepsQuantity = this.steps.length;
//         this.nextButton = this.wizard.querySelector('.next');
//         this.prevButton = this.wizard.querySelector('.previous');

//         this.init();
//     }

//     init() {
//         this.updateButtonsStatus();
//         this.updatePanelsPosition();
//         this.addEventListeners();
//     }

//     updateButtonsStatus() {
//         this.prevButton.disabled = this.currentStep === 0;
//         this.nextButton.disabled = this.currentStep === this.stepsQuantity - 1;

//         switch (this.currentStep) {
//             case 0:
//                 this.nextButton.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>До фото<i class="bi bi-arrow-right-short ms-2"></i>';
//                 this.prevButton.classList.add('d-none');
//                 break;
//             case 1:
//                 this.nextButton.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>До опису<i class="bi bi-arrow-right-short ms-2"></i>';
//                 this.prevButton.classList.remove('d-none');
//                 break;
//             case 2:
//                 this.nextButton.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>Підтвердження<i class="bi bi-arrow-right-short ms-2"></i>';
//                 break;
//             default:
//                 this.nextButton.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>Відправити<i class="bi bi-arrow-right-short ms-2"></i>';
//                 break;
//         }
//     }

//     addEventListeners() {
//         this.nextButton.addEventListener('click', () => this.moveStep(1));
//         this.prevButton.addEventListener('click', () => this.moveStep(-1));
//     }

//     moveStep(movement) {
//         const newStep = this.currentStep + movement;
//         if (newStep >= 0 && newStep < this.stepsQuantity) {
//             this.currentStep = newStep;
//             this.updatePanelsPosition();
//             this.updateButtonsStatus();
//             this.animateStepIcons();
//         }
//     }

//     updatePanelsPosition() {
//         this.panels.forEach((panel, index) => {
//             panel.classList.remove('movingIn', 'movingOutBackward', 'movingOutForward');
//             if (index === this.currentStep) {
//                 panel.classList.add('movingIn');
//             } else if (index < this.currentStep) {
//                 panel.classList.add('movingOutBackward');
//             } else {
//                 panel.classList.add('movingOutForward');
//             }
//         });
//     }

//     animateStepIcons() {
//         const animateActiveIconClass = ['d-block', 'animate__animated', 'animate__tada', 'animate__infinite'];
//         const stepIcons = this.wizard.querySelectorAll('.step__number i');

//         stepIcons.forEach((icon, index) => {
//             icon.classList.remove(...animateActiveIconClass);
//             if (index === this.currentStep) {
//                 icon.classList.add(...animateActiveIconClass);
//             }
//         });
//     }
// }

// const wizardElement = document.getElementById('wizard');
// const wizard = new Wizard(wizardElement);
