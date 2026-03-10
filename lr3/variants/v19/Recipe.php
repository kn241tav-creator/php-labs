<?php
/**
 * Клас Recipe — модель рецепту
 *
 * Властивості: name (назва), cuisine (кухня), time (час приготування)
 */

class Recipe
{
    public string $name;
    public string $cuisine;
    public int $time;

    /**
     * Конструктор — задає початкові значення властивостей
     */
    public function __construct(string $name = '', string $cuisine = '', int $time = 0)
    {
        $this->name = $name;
        $this->cuisine = $cuisine;
        $this->time = $time;
    }

    /**
     * Виводить інформацію про рецепт
     */
    public function getInfo(): string
    {
        return "Рецепт: {$this->name}, Кухня: {$this->cuisine}, Час: {$this->time} хв";
    }

    /**
     * Метод клонування — при копіюванні задає значення за замовчанням
     */
    public function __clone(): void
    {
        $this->name = "Новий рецепт";
        $this->cuisine = "";
        $this->time = 0;
    }
}
