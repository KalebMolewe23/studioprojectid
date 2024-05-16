<template>
    <button type="button" class="btn btn-success" @click="openModal">
        Tawarkan Sekarang
    </button>

    <!-- Modal -->
    <div class="modal fade" ref="modalDemo" tabindex="-1" aria-labelledby="modal_demo_label" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal_demo_label">Modal title</h5>
                    <button type="button" class="btn-close" aria-label="Close" @click="closeModal"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue';

    const modalDemo = ref(null);

    function openModal() {
        if (modalDemo.value) {
            modalDemo.value.show();
        }
    }

    function closeModal() {
        if (modalDemo.value) {
            modalDemo.value.hide();
        }
    }

    onMounted(() => {
        if (modalDemo.value) {
            modalDemo.value = new bootstrap.Modal(modalDemo.value, {});
        }
    });
</script>

<style scoped>
    .modal {
        display: none; /* Default to hide the modal */
    }
</style>
