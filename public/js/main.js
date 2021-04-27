function range() {
    return {
        minprice: 1930,
        maxprice: 2021,
        min: 1930,
        max: 2021,
        minthumb: 0,
        maxthumb: 0,

        mintrigger() {
            this.minprice = Math.min(this.minprice, this.maxprice - 1);
            this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
        },

        maxtrigger() {
            this.maxprice = Math.max(this.maxprice, this.minprice + 1);
            this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
        },
    }
}