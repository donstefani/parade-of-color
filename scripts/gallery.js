/**
 * Carousel Image Gallery with Modal
 * Handles image navigation with carousel loop and modal full-size viewing
 */
class ImageGallery {
    constructor(containerId, images, options = {}) {
        this.container = document.getElementById(containerId);
        
        if (!this.container) {
            console.error('Gallery container not found:', containerId);
            return;
        }
        
        this.images = this.sortImages(images);
        this.currentIndex = 0;
        this.options = {
            showNavigation: true,
            autoPlay: false,
            autoPlayInterval: 3000,
            ...options
        };
        
        this.init();
    }
    
    /**
     * Sort images by sort_order, fallback to array order if sort_order is 0
     */
    sortImages(images) {
        return images.sort((a, b) => {
            // If both have sort_order 0, maintain original order
            if (a.sort_order === 0 && b.sort_order === 0) {
                return 0;
            }
            // Sort by sort_order, with 0 values treated as highest priority
            if (a.sort_order === 0) return -1;
            if (b.sort_order === 0) return 1;
            return a.sort_order - b.sort_order;
        });
    }
    
    init() {
        this.createGallery();
        this.bindEvents();
        this.showImage(0);
        
        // Inject CSS directly as fallback
        this.injectModalCSS();
        
    }
    
    injectModalCSS() {
        // Check if CSS is already injected
        if (document.getElementById('gallery-modal-css')) return;
        
        const style = document.createElement('style');
        style.id = 'gallery-modal-css';
        style.textContent = `
            .gallery-modal {
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                width: 100% !important;
                height: 100% !important;
                background: rgba(0, 0, 0, 0.9) !important;
                z-index: 100002 !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                opacity: 0 !important;
                visibility: hidden !important;
                transition: opacity 0.3s ease, visibility 0.3s ease !important;
            }
            
            .gallery-modal.active {
                opacity: 1 !important;
                visibility: visible !important;
            }
            
            .modal-content {
                position: relative !important;
                max-width: 90vw !important;
                max-height: 90vh !important;
                display: flex !important;
                flex-direction: column !important;
            }
            
            .modal-header {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
                color: white !important;
                margin-bottom: 1rem !important;
            }
            
            .modal-counter {
                font-size: 1.2rem !important;
                font-weight: bold !important;
            }
            
            .modal-close {
                background: none !important;
                border: none !important;
                color: white !important;
                font-size: 2rem !important;
                cursor: pointer !important;
                padding: 0 !important;
                width: 40px !important;
                height: 40px !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                border-radius: 50% !important;
                transition: background-color 0.3s ease !important;
            }
            
            .modal-close:hover {
                background: rgba(255, 255, 255, 0.2) !important;
            }
            
            .modal-image-container {
                position: relative !important;
                max-width: 100% !important;
                max-height: 80vh !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
            }
            
            .modal-image-container img {
                max-width: 100% !important;
                max-height: 100% !important;
                object-fit: contain !important;
                border-radius: 4px !important;
            }
            
            .modal-nav {
                position: absolute !important;
                top: 50% !important;
                transform: translateY(-50%) !important;
                background: rgba(0, 0, 0, 0.7) !important;
                color: white !important;
                border: none !important;
                width: 50px !important;
                height: 50px !important;
                border-radius: 50% !important;
                font-size: 24px !important;
                cursor: pointer !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                transition: background-color 0.3s ease !important;
                z-index: 2 !important;
            }
            
            .modal-nav:hover {
                background: rgba(0, 0, 0, 0.9) !important;
            }
            
            .modal-prev {
                left: -60px !important;
            }
            
            .modal-next {
                right: -60px !important;
            }
        `;
        
        document.head.appendChild(style);
    }
    
    createGallery() {
        this.container.innerHTML = `
            <div class="gallery-main">
                <div class="gallery-image-container">
                    <img id="gallery-main-image" src="" alt="" />
                    ${this.options.showNavigation ? `
                        <button class="gallery-nav gallery-prev" aria-label="Previous image">‹</button>
                        <button class="gallery-nav gallery-next" aria-label="Next image">›</button>
                    ` : ''}
                </div>
            </div>
        `;
        
        // Create modal
        this.createModal();
    }
    
    createModal() {
        // Check if modal already exists globally
        let modal = document.getElementById('gallery-modal');
        
        if (!modal) {
            modal = document.createElement('div');
            modal.id = 'gallery-modal';
            modal.className = 'gallery-modal';
            
            // Apply styles directly to ensure they work
            modal.style.position = 'fixed';
            modal.style.top = '0';
            modal.style.left = '0';
            modal.style.width = '100%';
            modal.style.height = '100%';
            modal.style.background = 'rgba(0, 0, 0, 0.9)';
            modal.style.zIndex = '100002';
            modal.style.display = 'flex';
            modal.style.alignItems = 'center';
            modal.style.justifyContent = 'center';
            modal.style.opacity = '0';
            modal.style.visibility = 'hidden';
            modal.style.transition = 'opacity 0.3s ease, visibility 0.3s ease';
            
            document.body.appendChild(modal);
        }
        
        // Update modal content for this gallery instance
        modal.innerHTML = `
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-counter">1 / ${this.images.length}</span>
                    <button class="modal-close" aria-label="Close modal">&times;</button>
                </div>
                <div class="modal-image-container">
                    <img id="modal-main-image" src="" alt="" />
                    <button class="modal-nav modal-prev" aria-label="Previous image">‹</button>
                    <button class="modal-nav modal-next" aria-label="Next image">›</button>
                </div>
            </div>
        `;
        
        this.modal = modal;
    }
    
    bindEvents() {
        // Main gallery navigation buttons
        const prevBtn = this.container.querySelector('.gallery-prev');
        const nextBtn = this.container.querySelector('.gallery-next');
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => this.previousImage());
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => this.nextImage());
        }
        
        // Main image click to open modal
        const mainImg = this.container.querySelector('#gallery-main-image');
        if (mainImg) {
            mainImg.addEventListener('click', () => this.openModal());
        }
        
        // Modal events
        this.bindModalEvents();
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (this.modal && this.modal.classList.contains('active')) {
                // Modal is open - handle modal navigation
                if (e.key === 'ArrowLeft') this.previousImage();
                if (e.key === 'ArrowRight') this.nextImage();
                if (e.key === 'Escape') this.closeModal();
            } else if (this.container.contains(document.activeElement) || 
                this.container.querySelector('.gallery-main').contains(document.activeElement)) {
                // Main gallery navigation
                if (e.key === 'ArrowLeft') this.previousImage();
                if (e.key === 'ArrowRight') this.nextImage();
                if (e.key === 'Enter' || e.key === ' ') this.openModal();
            }
        });
    }
    
    bindModalEvents() {
        if (!this.modal) return;
        
        // Modal close button
        const closeBtn = this.modal.querySelector('.modal-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => this.closeModal());
        }
        
        // Modal navigation buttons
        const modalPrevBtn = this.modal.querySelector('.modal-prev');
        const modalNextBtn = this.modal.querySelector('.modal-next');
        
        if (modalPrevBtn) {
            modalPrevBtn.addEventListener('click', () => this.previousImage());
        }
        
        if (modalNextBtn) {
            modalNextBtn.addEventListener('click', () => this.nextImage());
        }
        
        // Click outside modal to close
        this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) {
                this.closeModal();
            }
        });
        
        // Touch/swipe support for mobile
        this.addSwipeSupport();
    }
    
    addSwipeSupport() {
        if (!this.modal) return;
        
        let startX = 0;
        let startY = 0;
        let endX = 0;
        let endY = 0;
        let isSwipeGesture = false;
        
        // Touch start
        this.modal.addEventListener('touchstart', (e) => {
            const touch = e.touches[0];
            startX = touch.clientX;
            startY = touch.clientY;
            isSwipeGesture = false;
        }, { passive: true });
        
        // Touch move - determine if this is a horizontal swipe
        this.modal.addEventListener('touchmove', (e) => {
            if (!startX || !startY) return;
            
            const touch = e.touches[0];
            const deltaX = Math.abs(touch.clientX - startX);
            const deltaY = Math.abs(touch.clientY - startY);
            
            // If horizontal movement is greater than vertical, it's a swipe gesture
            if (deltaX > deltaY && deltaX > 10) {
                isSwipeGesture = true;
                // Prevent scrolling while swiping
                e.preventDefault();
            }
        }, { passive: false });
        
        // Touch end - handle swipe
        this.modal.addEventListener('touchend', (e) => {
            if (!isSwipeGesture || !startX) return;
            
            const touch = e.changedTouches[0];
            endX = touch.clientX;
            endY = touch.clientY;
            
            const deltaX = endX - startX;
            const deltaY = endY - startY;
            const minSwipeDistance = 50; // Minimum distance for a swipe
            
            // Check if it's a valid horizontal swipe
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > minSwipeDistance) {
                if (deltaX > 0) {
                    // Swipe right - go to previous image
                    this.previousImage();
                } else {
                    // Swipe left - go to next image
                    this.nextImage();
                }
            }
            
            // Reset values
            startX = 0;
            startY = 0;
            endX = 0;
            endY = 0;
            isSwipeGesture = false;
        }, { passive: true });
    }
    
    showImage(index) {
        if (index < 0 || index >= this.images.length) return;
        
        this.currentIndex = index;
        const image = this.images[index];
        const mainImg = this.container.querySelector('#gallery-main-image');
        
        // Update main image
        mainImg.src = `images/${image.new_name}`;
        mainImg.alt = `Gallery image ${index + 1}`;
        
        // Update modal image if modal exists
        if (this.modal) {
            const modalImg = this.modal.querySelector('#modal-main-image');
            const modalCounter = this.modal.querySelector('.modal-counter');
            
            if (modalImg) {
                modalImg.src = `images/${image.new_name}`;
                modalImg.alt = `Gallery image ${index + 1}`;
            }
            
            if (modalCounter) {
                modalCounter.textContent = `${index + 1} / ${this.images.length}`;
            }
        }
    }
    
    nextImage() {
        const nextIndex = (this.currentIndex + 1) % this.images.length;
        this.showImage(nextIndex);
    }
    
    previousImage() {
        const prevIndex = this.currentIndex === 0 ? this.images.length - 1 : this.currentIndex - 1;
        this.showImage(prevIndex);
    }
    
    openModal() {
        if (!this.modal) {
            console.error('Modal not found');
            return;
        }
        
        // Check if modal is still in DOM
        if (!document.body.contains(this.modal)) {
            this.createModal();
        }
        
        // Apply styles directly to make modal visible with !important
        this.modal.style.setProperty('opacity', '1', 'important');
        this.modal.style.setProperty('visibility', 'visible', 'important');
        this.modal.style.setProperty('display', 'flex', 'important');
        
        document.body.style.overflow = 'hidden';
        
        // Update modal with current image
        this.showImage(this.currentIndex);
    }
    
    closeModal() {
        if (!this.modal) return;
        
        // Hide modal using inline styles
        this.modal.style.setProperty('opacity', '0', 'important');
        this.modal.style.setProperty('visibility', 'hidden', 'important');
        
        document.body.style.overflow = '';
    }
    
    // Public method to update images (useful when JSON data changes)
    updateImages(newImages) {
        this.images = this.sortImages(newImages);
        this.currentIndex = 0;
        this.createGallery();
        this.bindEvents();
        this.showImage(0);
    }
}
