
const addQuantitys = document.querySelectorAll('.add');

addQuantitys.forEach(addQuantity => {
    addQuantity.addEventListener('click', (e) => {
        const quantitySelect = addQuantity.parentNode.querySelector('.quantitySelect');
        let quantity = parseInt(quantitySelect.dataset.quantity) || 1;
        quantity++;
        quantitySelect.dataset.quantity = quantity;
        quantitySelect.innerText = quantity;
    });
});

const decreaseQuantitys = document.querySelectorAll('.remove');

decreaseQuantitys.forEach(decreaseQuantity => {
    decreaseQuantity.addEventListener('click', () => {
        const quantitySelect = decreaseQuantity.parentNode.querySelector('.quantitySelect');
        let quantity = parseInt(quantitySelect.dataset.quantity) || 1;

        if (quantity > 1) {
            quantity--;
            quantitySelect.dataset.quantity = quantity;
            quantitySelect.innerText = quantity;
        }
    });
});

const addTocartForms = document.querySelectorAll('.formCart');

addTocartForms.forEach(addTocartForm => {
    addTocartForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const quantity = Number(e.target.parentNode.querySelector('.quantitySelect').dataset.quantity) || 1;
        console.log('Quantity:', quantity);
        
        const id = e.target.id; 
        console.log('Product ID:', id);
        
        const price = Number(e.target.parentNode.querySelector('.price').innerText);
        console.log('Price:', price);
        
        const data = {
            productId: id,
            quantity: quantity,
            price: price
        };

        try {
            const url = '';
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data) 
            });
            if (!response.ok) {
                throw new Error(`Server error: ${response.status}`);
            }
            const result = await response.json();
            console.log('Product added to cart:', result);

        } catch (error) {
            console.error('Failed to add product to cart:', error);
        }
    });
});


