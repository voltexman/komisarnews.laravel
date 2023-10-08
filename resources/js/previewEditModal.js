export const previewTemplate = `<div class="dz-preview dz-file-preview my-3 col-3" data-aos="zoom-in" data-aos-delay="200" data-aos-delay="500">
    <div class="dz-details d-grid">
        <img class="img-fluid" data-dz-thumbnail />
        <div class="dz-control btn-group"></div>
    </div>
</div>`;

export function createImageEditButtons(file) {
    const previewControl = file.previewTemplate.querySelector('.dz-control')

    const editButton = document.createElement('button')
    editButton.setAttribute('id', 'imageEditBtn_' + file.upload.uuid)
    editButton.setAttribute('type', 'button')
    editButton.classList.add('btn', 'rounded-top-0')
    editButton.innerHTML = `<i class="bi bi-crop"></i>`

    const removeButton = document.createElement('button')
    removeButton.setAttribute('id', 'imageRemoveBtn_' + file.upload.uuid)
    removeButton.setAttribute('type', 'button')
    removeButton.classList.add('btn', 'bg-danger', 'rounded-top-0')
    removeButton.innerHTML = `<i class="bi bi-x-lg"></i>`

    previewControl.appendChild(editButton)
    previewControl.appendChild(removeButton)
}

export function createImageEditModal(file, dataURL) {
    const modalElement = document.createElement('div')
    modalElement.classList.add('modal', 'modal-md', 'fade')
    modalElement.setAttribute('id', 'imageEditModal_' + file.upload.uuid)
    modalElement.setAttribute('data-bs-backdrop', 'static')
    modalElement.setAttribute('data-bs-keyboard', 'false')
    modalElement.setAttribute('tabindex', '-1')
    modalElement.setAttribute('aria-labelledby', 'staticBackdropLabel')
    modalElement.setAttribute('aria-hidden', 'true')
    modalElement.innerHTML = `<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <div class="modal-title fs-5" id="staticBackdropLabel">
                        <span class="me-2"><i class="bi bi-crop me-2"></i>Обробка
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    

                    <div class="image-container rounded" class="d-none" style="overflow:hidden">
                        <img id="img-` + file.upload.uuid + `" src="` + file.dataURL + `">
                    </div>

                    <p class="text-center text-muted info mt-3">
                        Виберіть найвигіднішу позицію та положення, яке найкраще відобразить ваше волосся та його
                        стан
                    </p>

                    <div class="image-control d-flex justify-content-center mt-3">
                        <div class="btn-group me-2" role="group">
                            <button type="button" class="btn rotate-left rounded-start">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </button>
                            <button type="button" class="btn rotate-right rounded-end">
                                <i class="bi bi-arrow-clockwise"></i>
                            </button>
                        </div>

                        <div class="btn-group me-2" role="group">
                            <button type="button" class="btn zoom-in rounded-start">
                                <i class="bi bi-zoom-in"></i>
                            </button>
                            <button type="button" class="btn zoom-out rounded-end">
                                <i class="bi bi-zoom-out"></i>
                            </button>
                        </div>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn scale-x rounded-start">
                                <i class="bi bi-arrow-left-right"></i>
                            </button>
                            <button type="button" class="btn scale-y rounded-end">
                                <i class="bi bi-arrow-down-up"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-2 float-end rounded-3 shadow" data-bs-dismiss="modal">
                        <i class="bi bi-x me-1"></i>Відмінити
                    </button>
                    <button type="button" class="btn bg-danger color-white float-end rounded-3 shadow crop">
                        <i class="bi bi-save me-1"></i>Зберегти
                    </button>
                </div>
            </div>
        </div>`

    document.body.appendChild(modalElement)
}

export function createImageRemoveModal(file) {
    const modalElement = document.createElement('div')
    modalElement.classList.add('modal', 'modal-md', 'fade')
    modalElement.setAttribute('id', 'imageRemoveModal_' + file.upload.uuid)
    modalElement.setAttribute('data-bs-backdrop', 'static')
    modalElement.setAttribute('data-bs-keyboard', 'false')
    modalElement.setAttribute('tabindex', '-1')
    modalElement.setAttribute('aria-labelledby', 'staticBackdropLabel')
    modalElement.setAttribute('aria-hidden', 'true')
    modalElement.innerHTML = `<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-3">
                <div class="modal-header">
                    <div class="modal-title fs-5" id="staticBackdropLabel">
                        <span class="me-2"><i class="bi bi-trash me-2"></i>Підтвердження
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="waiting-place d-flex align-items-center justify-content-center">
                        <i class="bi bi-arrow-repeat waiting-icon"></i>
                    </div>

                    <img class="img-fluid rounded-4 shadow" src="`+ file.dataURL + `" />

                    <p class="text-center text-muted info mt-3">Бажаєте видалити це фото?</p>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn me-2 float-end rounded-3 shadow" data-bs-dismiss="modal">
                        <i class="bi bi-x me-1"></i>Відмінити
                    </button>
                    <button type="button" class="btn remove-image-btn bg-danger color-white float-end crop rounded-3 shadow">
                        <i class="bi bi-trash me-1"></i>Видалити
                    </button>
                </div>
            </div>
        </div>`

    document.body.appendChild(modalElement)
}

// transform cropper dataURI output to a Blob which Dropzone accepts
export function dataURItoBlob(dataURI) {
    var byteString = atob(dataURI.split(',')[1]);
    var ab = new ArrayBuffer(byteString.length);
    var ia = new Uint8Array(ab);
    for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }
    return new Blob([ab], { type: 'image/jpeg' });
}