import FrontMatter from './FrontMatter';

export default class Page {
  // tslint:disable:variable-name
  private _lastUpdated: number;
  private _path: string;
  private _title: string;
  private _frontMatter: FrontMatter;

  constructor(page: {
    lastUpdated: number;
    path: string;
    title: string;
    frontmatter: FrontMatter;
  }) {
    this._lastUpdated = page.lastUpdated;
    this._path = page.path;
    this._title = page.title;
    this._frontMatter = new FrontMatter(page.frontmatter);
  }

  get tags() {
    return this._frontMatter.getTags();
  }

  public getPath() {
    return this._path;
  }

  public getTitle() {
    return this._title;
  }
}
