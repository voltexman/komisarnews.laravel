import '../css/dropzone.css';
import 'cropperjs/dist/cropper.min.css';

// import DeviceDetector from "device-detector-js";
// import { Cola} from "/node_modules/bootstrap/dist/js/bootstrap";
import Modal from 'bootstrap/js/dist/modal'
import Dropzone from "dropzone";
import Cropper from 'cropperjs';

import * as preview from './previewEditModal'

let imagesDescription = document.querySelectorAll('div#imagesDescription p');
let uploadZone = document.querySelector('button#uploadZone');
let uploadZoneIcon = document.querySelector('button#uploadZone i');
let uploadZoneAddTitle = document.querySelector('button#uploadZone .add-title');
let uploadZoneAddDescription = document.querySelector('button#uploadZone .add-description div');

const dropzone = document.querySelector('button#uploadZone');

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
                const modal = new Modal(modalElement)

                modal.show()

                modalElement.addEventListener('shown.bs.modal', event => {
                    const image = document.createElement('img')
                    image.classList.add('img-fluid')

                    const reader = new FileReader();

                    const modalWidth = event.target.querySelector('.modal-body').offsetWidth

                    const waitingPlace = event.target.querySelector('.waiting-place')
                    const imageContainer = event.target.querySelector('.image-container')

                    imageContainer.style.width = "calc(" + modalWidth + "px - 2rem)";
                    imageContainer.style.height = "calc(" + modalWidth + "px - 4rem)";

                    reader.onload = function () {

                        image.src = reader.result
                        imageContainer.append(image);

                        const cropper = new Cropper(image, {
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
                                waitingPlace.classList.add('d-none')
                                imageContainer.classList.remove('d-none')

                                document.querySelector('.rotate-left')
                                    .addEventListener('click', () => {
                                        cropper.rotate('-45')
                                    })
                                document.querySelector('.rotate-right')
                                    .addEventListener('click', () => {
                                        cropper.rotate('45')
                                    })
                                document.querySelector('.zoom-in')
                                    .addEventListener('click', () => {
                                        cropper.zoom('0.1')
                                    })
                                document.querySelector('.zoom-out')
                                    .addEventListener('click', () => {
                                        cropper.zoom('-0.1')
                                    })
                                document.querySelector('.scale-x')
                                    .addEventListener('click', () => {
                                        cropper.scaleX('-1')
                                    })
                                document.querySelector('.scale-y')
                                    .addEventListener('click', () => {
                                        cropper.scaleY('-1')
                                    })
                            }
                        });

                        modalElement.addEventListener('hidden.bs.modal', event => {
                            cropper.destroy()
                            modalElement.remove()

                            preview.createImageEditModal(file, dataURL)
                        })

                        modalElement.querySelector('.crop').addEventListener('click', function () {
                            const blob = cropper.getCroppedCanvas().toDataURL("image/jpeg")
                            const newFile = preview.dataURItoBlob(blob)
                            newFile.name = file.name;
                            dz.removeFile(file)
                            dz.addFile(newFile)
                            modal.hide()
                        })
                    }

                    reader.readAsDataURL(file);
                })
            })

            imageRemoveButton.addEventListener('click', function () {
                const modalElement = document.getElementById('imageRemoveModal_' + file.upload.uuid)
                const modal = new Modal(modalElement)

                modal.show()

                modalElement.addEventListener('shown.bs.modal', event => {
                    const waitingPlace = event.target.querySelector('.waiting-place')
                    const removeImageBtn = event.target.querySelector('.remove-image-btn')

                    waitingPlace.classList.add('d-none')

                    removeImageBtn.addEventListener('click', function () {
                        dz.removeFile(file)
                        modal.hide()
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
                uploadZone.style.border = '2px dashed'
                uploadZoneIcon.classList.remove('bi-x-lg')
                uploadZoneIcon.classList.add('bi-upload')
                uploadZoneAddTitle.innerHTML = 'Додайте фотографії волосся,<br>або перетягніть їх сюди'
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
            uploadZoneAddTitle.innerHTML = 'Ви досягли максимальної<br>кількості зображень'
            uploadZoneAddDescription.innerHTML = '<span>видаліть фото, щоб обрати інше</span><span>або змініть розмір та положення</span>'
        });
    }
})