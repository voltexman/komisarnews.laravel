import '../css/dropzone.css';
import 'cropperjs/dist/cropper.min.css';

import Modal from 'bootstrap/js/dist/modal'
import Dropzone from "dropzone";
import Cropper from 'cropperjs';

import * as preview from './previewEditModal'

let imagesDescription = document.querySelectorAll('div#imagesDescription p');
let uploadZone = document.querySelector('div#uploadZone');
let uploadZoneIcon = uploadZone.querySelector('div#uploadZone i');
let uploadZoneAddTitle = uploadZone.querySelector('div#uploadZone .add-title');
let uploadZoneAddDescription = uploadZone.querySelector('div#uploadZone .add-description div');

const dropzone = document.querySelector('div#uploadZone');

const dz = new Dropzone(dropzone, {
    previewTemplate: preview.previewTemplate,
    previewsContainer: 'div#acceptedImages',
    url: "/file/post",
    maxFiles: 4,
    uploadMultiple: true,
    acceptedFiles: ".jpeg,.jpg,.png",
    autoProcessQueue: false,
    init: function () {

        this.on("thumbnail", (file, dataURL) => {

            preview.createImageEditButtons(file)
            preview.createImageEditModal(file, dataURL)
            preview.createImageRemoveModal(file, dataURL)

            const imageEditButton = document.getElementById('imageEditBtn_' + file.upload.uuid);
            const imageRemoveButton = document.getElementById('imageRemoveBtn_' + file.upload.uuid);

            imageEditButton.addEventListener('click', function () {
                const modalElement = document.getElementById('imageEditModal_' + file.upload.uuid)
                new Modal(modalElement).show()

                modalElement.addEventListener('shown.bs.modal', event => {

                    const cropper = new Cropper(document.getElementById('img-' + file.upload.uuid), {
                        aspectRatio: 1,
                        crop: true,
                        rotatable: true,
                        viewMode: 4,
                        dragMode: "move",
                        autoCropArea: 0.5,
                        restore: false,
                        guides: false,
                        center: false,
                        highlight: false,
                        zoomable: true,
                        scalable: true,
                        cropBoxMovable: true,
                        cropBoxResizable: true,
                        toggleDragModeOnDblclick: false,
                        ready() {
                            // waitingPlace.classList.add('d-none')
                        }
                    });

                    event.target.querySelector('.rotate-left').addEventListener('click', function () {
                        cropper.rotate('-45')
                    })
                    event.target.querySelector('.rotate-right').addEventListener('click', function () {
                        cropper.rotate('45')
                    })

                    event.target.querySelector('.zoom-in').addEventListener('click', function () {
                        cropper.zoom('0.1')
                    })
                    event.target.querySelector('.zoom-out').addEventListener('click', function () {
                        cropper.zoom('-0.1')
                    })

                    event.target.querySelector('.scale-x').addEventListener('click', function () {
                        cropper.scaleX('-1') || scaleX('1')
                    })
                    event.target.querySelector('.scale-y').addEventListener('click', function () {
                        cropper.scaleY('-1') || scaleY('1')
                    })
                })

            })

            imageRemoveButton.addEventListener('click', function () {
                const modalElement = document.getElementById('imageRemoveModal_' + file.upload.uuid);
                const modal = new Modal(modalElement);

                modal.show();

                modalElement.addEventListener('shown.bs.modal', event => {
                    const waitingPlace = event.target.querySelector('.waiting-place');
                    const removeImageBtn = event.target.querySelector('.remove-image-btn');

                    waitingPlace.classList.add('d-none')

                    removeImageBtn.addEventListener('click', function () {
                        dz.removeFile(file);
                        modal.hide();
                    })
                })
            })
        });

        this.on("addedfile", file => {
            imagesDescription[0].classList.add('d-none')
            imagesDescription[1].classList.add('d-none')
        })

        this.on("removedfile", file => {
            if (dz.files.length >= 1 && dz.files.length <= 3) {
                dz.element.removeAttribute('disabled')
                dz.element.style.cursor = 'pointer'
                uploadZone.style.border = '2px dashed #91765a'
                uploadZoneIcon.classList.remove('bi-x-lg')
                uploadZoneIcon.classList.add('bi-upload')
                uploadZoneAddTitle.innerHTML = 'Додайте фотографії волосся'
                uploadZoneAddDescription.innerHTML = '<span>видаліть фото, щоб обрати інше</span><span>або змініть розмір та положення</span>'
            }

            if (dz.files.length === 0) {
                imagesDescription[0].classList.remove('d-none')
                imagesDescription[1].classList.remove('d-none')
            }
        });

        this.on("maxfilesexceeded", file => {
            this.removeFile(file);
        });

        this.on("maxfilesreached", file => {
            dz.element.setAttribute('disabled', 'disabled')
            dz.element.style.cursor = 'default'
            uploadZone.style.border = '2px solid rgba(145, 118, 90, .3'
            uploadZoneIcon.classList.remove('bi-upload')
            uploadZoneIcon.classList.add('bi-x-lg')
            uploadZoneAddTitle.innerHTML = 'Більше додати неможливо'
            uploadZoneAddDescription.innerHTML = '<span>максимальна кількість зображень</span><span>видаліть, щоб обрати інше</span>'
        });
    }
})