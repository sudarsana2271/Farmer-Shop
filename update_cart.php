<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $cart = json_decode(file_get_contents('cart.json'), true) ?? [];

    switch ($data['action']) {
        case 'add':
            $found = false;
            foreach ($cart as &$item) {
                if ($item['product'] === $data['product']) {
                    $item['quantity'] += $data['quantity'];
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $cart[] = [
                    'product' => $data['product'],
                    'price' => $data['price'],
                    'quantity' => $data['quantity']
                ];
            }
            break;

        case 'update':
            foreach ($cart as &$item) {
                if ($item['product'] === $data['product']) {
                    $item['quantity'] = $data['quantity'];
                    break;
                }
            }
            break;

        case 'delete':
            $cart = array_filter($cart, function($item) use ($data) {
                return $item['product'] !== $data['product'];
            });
            break;
    }

    file_put_contents('cart.json', json_encode($cart));
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
