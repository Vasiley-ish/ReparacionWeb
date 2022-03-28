@extends('layouts/reparacion-layout')

@section('title')
    Личный кабинет
@endsection

@include('sidebar')

@section('main')
  
<div class="wrapper">
        <div class="content">
            <header class="header">
                <h1 class="title content__title">Pages</h1>
                <div class="breadcrumbs">
                    <a href="#" class="breadcrumb">dashboard</a>
                    <a href="#" class="breadcrumb">pages</a>
                </div>
            </header>

            <nav class="tabs">
                <a href="" class="tab tab--selected">
                    <p class="tab__text">All items</p>
                    <p class="tab__text counter">+99</p>
                </a>
                <a href="" class="tab">
                    <p class="tab__text">mine</p>
                    <p class="tab__text counter">7</p>
                </a>
                <a href="" class="tab">
                    <p class="tab__text">Published</p>
                    <p class="tab__text counter">+99</p>
                </a>
                <a href="" class="tab">
                    <p class="tab__text">Draft</p>
                    <p class="tab__text counter">0</p>
                </a>
                <a href="" class="tab">
                    <p class="tab__text">trash</p>
                    <p class="tab__text counter">0</p>
                </a>
            </nav>

            <div class="panel content__panel">
                <div class="searchbar input-container ">
                    <input class="input" type="text" placeholder="Search">
                    <svg class="icon icon--panel searchbar__icon">
                        <use xlink:href="#search"></use>
                    </svg>
                </div>
                <button class="input-container input-container--filter">
                    <span class="input filter">Filter</span>
                    <svg class="icon icon--panel filter__icon">
                        <use xlink:href="#filter"></use>
                    </svg>
                </button>
                <button class="button">Add new</button>
            </div>

            <div class="table">
                <div class="table__item item--top">
                    <div class="table-top-text table__title">
                        title
                        <svg class="icon icon--arrow">
                            <use xlink:href="#arrow"></use>
                        </svg>
                    </div>

                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>

                    <div class="table__sidepanel">
                        <div class="checkbox-container">
                            <label for="selectAll" class="table-top-text checkbox-label">select all</label>
                            <input type="checkbox" id="selectAll" class="checkbox"></input>
                        </div>
                        <button href="#" class="icon sidepanel__setting-icon">
                            <svg class="icon">
                                <use xlink:href="#gear"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="table__item ">
                    <div class="table__title text">

                        <span>Terms & Conditions</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <button>
                                <svg class="icon dots-menu">
                                    <use xlink:href="#dots-menu"></use>
                                </svg>
                            </button>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item item--unactive">
                    <div class="table__title text">

                        <span>Start Your Order</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item">
                    <div class="table__title text">

                        <span>Speaking Inquiries</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item">
                    <div class="table__title text">

                        <span>Shipping & Returns</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item">
                    <div class="table__title text">

                        <span>Schedule a Consultation</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item">
                    <div class="table__title text">

                        <span>Privacy Policy</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item item--unactive">
                    <div class="table__title text">

                        <span>Portfolio</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item">
                    <div class="table__title text">

                        <span>Meet The Team</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item item--unactive">
                    <div class="table__title text">

                        <span>Join Our Team</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                            <!-- <div class="table__element table-top-text">
                                3873
                            </div>
                            <div class="table__element table-top-text">
                                0
                            </div>
                            <div class="table__element table-top-text">
                                0 
                            </div>
                            <div class="table__element table-top-text">
                                LoremLo remLoj ytjtyjty jtyj
                            </div>
                            <div class="table__element table-top-text">
                                Lor
                            </div>
                            <div class="table__element table-top-text">
                                item 2
                            </div>
                            <div class="table__element table-top-text">
                                nfngfngf, ip 
                            </div>
                            <div class="table__element table-top-text">
                                Lorem 
                            </div>
                            <div class="table__element table-top-text">
                                Lorem 
                            </div> -->
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table__item">
                    <div class="table__title text">

                        <span>Leave a review</span>
                    </div>
                    <div class="table__elements">
                        <div class="table__element table-top-text">
                        </div>
                    </div>
                    <div class="table__sidepanel item__sidepanel">
                        <div class="checkbox-container">
                            <label for="1" class="table-top-text checkbox-label"></label>
                            <input type="checkbox" id="1" class="checkbox"></input>
                        </div>
                        <div class="icon sidepanel__setting-icon table__pop-up">
                            <svg class="icon dots-menu">
                                <use xlink:href="#dots-menu"></use>
                            </svg>
                            <div class="pop-up-card">
                                <a href="#" class="pop-up__link link">
                                    edit
                                </a>
                                <a href="#" class="pop-up__link link">
                                    duplicate
                                </a>
                                <a href="#" class="pop-up__link link">
                                    unpublish
                                </a>
                                <a href="#" class="pop-up__link link">
                                    delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pagination">
                <div class="pagination__element">
                    <span class="text text--dark text--pagination">Rows per page:</span>
                    <span class="text text--interactable text--pagination">10
                        <button>
                            <svg class="icon icon--triangle triangle--down">
                                <use xlink:href="#triangle"></use>
                            </svg>
                        </button>
                    </span>
                </div>
                <div class="pagination__element">
                    <div class="pagination__element">
                        <button>
                            <svg class="icon icon--triangle triangle--left">
                                <use xlink:href="#triangle"></use>
                            </svg>
                        </button>
                        <span class="text text--dark text--pagination">1 of 200</span>

                        <button>
                            <svg class="icon icon--triangle triangle--right">
                                <use xlink:href="#triangle"></use>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>


        </div>
</div>
@endsection