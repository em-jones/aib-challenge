import Tag from './Tag';

export default class FrontMatter {
  // tslint:disable:variable-name

  private _tags: Tag[];
  constructor(fm: any) {
    this._tags = [];
  }
  public getTags(): any {
    return this._tags;
  }
}
