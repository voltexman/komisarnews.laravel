import axios from "axios";
import anime from "animejs";
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
        if (this.currentStep === 0) {
            // Отримуємо посилання на чекбокс і кнопку за їхніми id

            this.previousControl.classList.remove('d-none');

            var nameField = this.wizard.querySelector('input[name="name"]');
            var phoneField = this.wizard.querySelector('input[name="phone"]');
            var weightField = this.wizard.querySelector('input[name="weight"]');
            var lengthField = this.wizard.querySelector('input[name="length"]');
            var ageField = this.wizard.querySelector('input[name="age"]');

            // Додаємо обробник події на поля вводу
            nameField.addEventListener('input', checkFields);
            phoneField.addEventListener('input', checkFields);
            weightField.addEventListener('input', checkFields);
            lengthField.addEventListener('input', checkFields);
            ageField.addEventListener('input', checkFields);

            // Функція для перевірки полів і зняття атрибуту disabled
            function checkFields() {
                const submitButton = document.querySelector('button.next');
                // Отримуємо значення полів
                var nameValue = nameField.value.trim();
                var phoneValue = phoneField.value.trim();
                var weightValue = weightField.value.trim();
                var lengthValue = lengthField.value.trim();
                var ageValue = ageField.value.trim();

                // Перевіряємо, чи всі поля заповнені
                if (nameValue !== '' && phoneValue !== '' && weightValue !== '' && lengthValue !== '' && ageValue !== '') {
                    submitButton.removeAttribute('disabled');
                    submitButton.classList.remove('disabled')
                } else {
                    submitButton.setAttribute('disabled', 'disabled');
                    submitButton.classList.add('disabled')
                }
            }

            checkFields();

            this.previousControl.classList.add('d-none');
        } else
            this.previousControl.classList.remove('d-none');

        if (this.currentStep === 1) {
            this.nextControl.removeAttribute('disabled', 'true');
            this.nextControl.classList.remove('disabled');

            this.nextControl.innerHTML = '<i class="bi bi-chat-square-text-fill me-2"></i>До опису<i class="bi bi-arrow-right-short ms-2"></i>';
        }

        if (this.currentStep === 2) {
            this.nextControl.removeAttribute('disabled', 'true');
            this.nextControl.classList.remove('disabled');

            this.nextControl.innerHTML = '<i class="bi bi-file-text-fill me-2"></i>Підтвердження<i class="bi bi-arrow-right-short ms-2"></i>';
        }

        if (this.currentStep === 3) {
            let checkRules = document.getElementById('checkbox-example-one');

            // Перевіряємо, чи чекбокс відмічений
            if (checkRules.checked) {
                // Якщо відмічений, знімаємо атрибут "disabled" з кнопки
                this.nextControl.removeAttribute('disabled');
                this.nextControl.classList.remove('disabled');
            } else {
                // Якщо не відмічений, додаємо атрибут "disabled" до кнопки
                this.nextControl.setAttribute('disabled', 'true');
                this.nextControl.classList.add('disabled');
            }
        }
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

    handleWizardConclusion(movement) {
        // this.wizard.classList.add('completed');

        this.nextControl.type = 'submit';

        const orderForm = document.querySelector('.form-wizard');

        orderForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = new FormData(this);
            const formAction = orderForm.getAttribute('action');

            const congratsPlace = orderForm.querySelector('.congrats-message');
            congratsPlace.classList.replace('d-none', 'd-flex');

            const waitingImage = orderForm.querySelector('.waiting-image');
            const successImage = orderForm.querySelector('.success-image');
            const successMessage = orderForm.querySelector('.success-message');
            const repeatButton = orderForm.querySelector('.repeat-button');

            setTimeout(function () {
                axios.post(formAction, formData)
                    .then(response => {
                        if (response) {
                            console.log(response.data);
                            waitingImage.classList.replace('d-block', 'd-none');
                            successImage.classList.replace('d-none', 'd-block');

                            anime({
                                targets: successImage,
                                duration: 2000,
                                delay: 100,
                                scale: [0, 1],
                                complete: function () {
                                    anime({
                                        targets: successImage,
                                        duration: 800,
                                        delay: 100,
                                        translateY: -50,
                                        easing: 'easeOutQuad',
                                        complete: function () {
                                            anime({
                                                targets: successMessage,
                                                duration: 5000,
                                                delay: 500,
                                                opacity: 1,
                                            });
                                            anime({
                                                targets: repeatButton,
                                                duration: 8000,
                                                delay: 1000,
                                                opacity: 1,
                                            });
                                        }
                                    });
                                }
                            });
                        } else {
                            console.error('Form submission failed');
                        }
                    })
                    .catch(error => {
                        console.error('An error occurred:', error);
                    });
            }, 1000);

            // repeatButton.addEventListener('click', function (event) {
            //     event.target.type = 'button';
            //     event.target.style.opacity = '0';

            //     congratsPlace.classList.replace('d-flex', 'd-none');
            //     waitingImage.classList.replace('d-block', 'd-none');
            //     successImage.classList.replace('d-block', 'd-none');
            //     successMessage.style.opacity = '0';
            //     successImage.style.top = 'calc(50% - 100px)';
            // })
        });
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