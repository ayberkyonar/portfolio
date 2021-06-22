class Player {
    constructor(name, symbol, turn) {
        this.name = name;
        this.turn = turn;
        this.symbol = symbol;
        this.points = 0;
    }

    getPoints() {
        return this.points;
    }

    getName() {
        return this.name;
    }
}